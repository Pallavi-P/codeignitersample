<?php
class Student_model extends CI_Model
{
	public function getdata()
	{

		$this->db->select('*');
		$this->db->from('student');
		$this->db->join('address', 'address.zipcode=student.zipcode');
		$query = $this->db->get();
		return $query->result();
	}






	function insertdata($data)
	{
		
		$this->db->trans_start();
		$this->db->insert('address',elements(array('zipcode', 'city', 'state'), $data));
		
		$this->db->insert('student', elements(array ('std_name', 'add_line1','zipcode'), $data));
		$studentId=$this->getLastInsertId();

		if(count($data['course_id'])>0 && is_array($data['course_id']))
		{
		$course=$this->prepareCourses($studentId,$data['course_id']);
		$this->db->insert_batch('student_course',$course);
		}
		
		$skills=$this->prepareskills($studentId,$data['skill']);
		if(count ($skills)>0)
		$this->db->insert_batch('studentSkill',$skills);
		$this->db->trans_complete();
	} 






	function getcourses()
	{
		$this->db->select('course_name,course_id');
		$query = $this->db->get('course');
		return $query->result();
	}





	/*function searchdata()
	{
		$std_id = $this->input->post('std_id');
		$this->db->like('std_id',$std_id);
		$query=$this->db->get('student');
		return $query->result();
	}
*/



	function prepareCourses($student_id, $course_id)
	{
        $counter=0;
        foreach ($course_id as $c => $value) 
        {
             $data [$counter++]= array(
                'std_id' => $student_id,
                'course_id' => $value);
        }

        return $data;
    }






	function getStudentRecord($id)
	{
	    
		$this->db->select('*');
        $this->db->from('student s');
		$this->db->where('s.std_id',$id);
		$this->db->join('address', 'address.zipcode=s.zipcode');
		//log_message('debug','get Student SQL'.$this->db->get_compiled_select());
		$query = $this->db->get();
		$data['student']= $query->result();
		
		$data['skills'] = $this->getStudentSkills($id);
		$data ['courses'] = $this-> getStudentCourses ($id);
		return $data;

	}

    
    function getStudentSkills($id){

    	//log_message('debug','Inside get Student Skills');
    	//$this->db->flush_cache();
    	$this->db->select('*');
        $this->db->from('student s');
		$this->db->where('s.std_id',$id);
		$this->db->join('studentSkill sk', 'sk.std_id=s.std_id','left');
		//log_message('debug','get Student SQL'.$this->db->get_compiled_select());
		$query = $this->db->get();
		return $query->result();
    }

    function getStudentCourses($id){

    	//log_message('debug','Inside get Student Courses');
    	//$this->db->flush_cache();
    	$this->db->select('*');
        $this->db->from('student s');
		$this->db->where('s.std_id',$id);
		$this->db->join('student_course scu', 'scu.std_id=s.std_id','left');
		$this->db->join('course cu', 'cu.course_id=scu.course_id','left');
		//log_message('debug','get Student SQL'.$this->db->get_compiled_select());
		$query = $this->db->get();
		return $query->result();


    }





	 function getLastInsertId(){
            $id=0;
            $query=$this->db->query("select LAST_INSERT_ID() as lastInsertID");
           $val=$query->result();
            foreach($val as $v)
            {
                $id=$v->lastInsertID;
            }
            return $id;
    }






  	function prepareskills($student_id, $skill)
  	{
        $counter=0;
        $data=array();
        foreach ($skill as $c => $value)
        {
        	if($value!=null){
             $data [$counter++]= array(
                'std_id' => $student_id,
                'skill' => $value);
        }
        }

        return $data;
    }


    

    function UpdateStudent($std_id)
    {

    	$this->db->trans_start();
		//$this->db->update('address',elements(array('zipcode', 'city', 'state'), $data));
		$this->db->replace('address', $data);
		log_message('debug','get Student SQL'.$this->db->get_compiled_select());
		//$this->db->update('student', elements(array ('std_name', 'add_line1','zipcode'), $data));
		$this->db->replace('student', $data);

		$this->db->where('std_id',$std_id);
		$this->db->delete('studentSkill');
		$this->db->where('std_id',$std_id);
		$this->db->delete('student_course');

		$studentId= $std_id;
		if(count($data['course_id'])>0 && is_array($data['course_id']))
		{
		$course=$this->prepareCourses($studentId,$data['course_id']);
		$this->db->insert_batch('student_course',$course);
		}
		
		$skills=$this->prepareskills($studentId,$data['skill']);
		if(count ($skills)>0)
		$this->db->insert_batch('studentSkill',$skills);
		$this->db->trans_complete();

    }


	





}
?>	
