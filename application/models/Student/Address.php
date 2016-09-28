<?php

class Address extends CI_Model {

        public $zipcode;
        public $city;
        public $state;

      /*  function getStudentadd($id){

        $this->db->select('*');
        $this->db->from('student s');
		$this->db->where('s.std_id',$id);
		$this->db->join('address', 'address.zipcode=s.zipcode');

		$query = $this->db->get();
		$result=$query->result();
		foreach ($query->result('Student') as $student)
		{
        	$student->zipcode; // access attributes
        	$student->city;
        	$student->state; // or methods defined on the 'User' class
        	
		}
		return $student;
	}*/

        function getStudentadd($student){

                $this->db->select('*');
                $this->db->from('address a');
                $this->db->where('a.zipcode',$student->zipcode);
                $query = $this->db->get();
               
                $student->address = $query->custom_row_object(0, 'Address');                 
                return $student;
        }

}

?>      
