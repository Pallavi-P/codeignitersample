<?php
// thiss is comment line

class student_controller extends CI_Controller
{
	public function __construct()
{
	parent :: __construct();
	$this->load->helper('array');
	$this->load->helper('url');
	// thiss is comment line
	//$this->load->helper('form');
}



	public function index()
	{
		$this->load->model('Student/Student_model');
		$data['val']= $this->Student_model->getdata();
		$this->load->view('Student/listview', $data);
	}




	function Add()
	{
		$data=array(
  	  
      'std_name' =>$this->input->post('std_name'),
      'add_line1' =>$this->input->post('add_line1'),
      'zipcode' =>$this->input->post('zipcode'),
      'city' =>$this->input->post('city'),
      'state' =>$this->input->post('state'),
      'course_id'=>$this->input->post('course_name'),
      'skill'=>$this->input->post('skill')
     );
		print_r($data);
		$this->load->model('Student/Student_model');
  	 	$insert=$this->Student_model->insertdata($data);
		$data['val'] = $this->Student_model->getdata();
		$this->load->view('Student/listview', $data);
	}




	function adddata()
	{
		$this->load->model('Student/Student_model');
		$data['course']= $this->Student_model->getcourses();
		$this->load->view('Student/addview',$data);
	}

	/*public function addUser()
  {
  	 
  	 

  	 
  }*/

	function viewStudent($id)
	{
		$this->load->model('Student/Student_model');
		$data= $this->Student_model->getStudentRecord($id);
		$this->load->view('student/singleview',$data);
	}




	function ViewRecordbyId()
	{
		//log_message('debug', "inside ViewRecordbyId");
		$this->load->model('Student/Student_model');
		$data['val']= $this->Student_model->searchdata();
		$data['skill']= $this->Student_model->searchskill();
		$this->load->view('Student/view',$data);
	}




	function UpdateStudent($std_id)
	{
		
      	$this->load->model('Student/Student_model');
		$this->Student_model->UpdateStudent($std_id);

	}	
}
?>	




	

	