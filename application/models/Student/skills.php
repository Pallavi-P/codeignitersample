<?php

class skills extends CI_Model {

        public $skill;
        
        
        function getStudentskill($id){

        $this->db->select('*');
        $this->db->from('student s');
		$this->db->where('s.std_id',$id);
		$this->db->join('studentSkill', 'studentSkill.std_id=s.std_id');

		$query = $this->db->get();
		$result=$query->result();
		foreach ($query->result('Student') as $student)
		{
        	$student->skill; // access attributes
        	 // or methods defined on the 'User' class
        	
		}
		return $student;
	}

}

?>      