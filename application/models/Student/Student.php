<?php

class Student extends CI_Model {

          private $std_id;
          private $std_name;
          private $ad_line1;
       //   private $zipcode;
          //private $address;
        
        

    public function getStudent($id){
	    
		$this->db->select('*');
        $this->db->from('student s');
		$this->db->where('s.std_id',$id);
		$query = $this->db->get();

		$student = $query->custom_row_object(0, 'Student');

		/*foreach ($query->result('Student') as $student)
		{
        	$student->std_id; // access attributes
        	$student->std_name;
        	$student->add_line1; // or methods defined on the 'User' class
        	
		}*/

 
       
		return $student;
	}

	
	 public  function getStd_id (){

	 	return $this ->std_id;

	 }
      public  function getStd_name (){
      	return $this->std_name;

      }
     public  function getAdd_line1(){

     	return $this->ad_line1;
     }
        public  function getZipcode(){

        	return $this ->zipcode;
        }
           
	 

}

?>      