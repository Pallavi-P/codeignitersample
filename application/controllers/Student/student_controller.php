<?php


class student_controller extends CI_Controller
{
	//private $std_id;
	
	private $add_line1;
	private $address;
	private $zipcode;
    private $city;
    private $state;

	

	public function __construct()
{
	parent :: __construct();
	$this->load->helper('array');
	$this->load->helper('url');
	$this->load->model('Student/Student', '', TRUE);
	$this->load->model('Student/Address', '', TRUE);
	$this->load->model('Student/skills', '', TRUE);
	$this->load->model('Student/Student_model');
	
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

	


	function viewStudent($id)
	{
		$this->load->model('Student/Student_model');
		$data= $this->Student_model->getStudentRecord($id);
		$this->load->view('student/singleview',$data);
	}


	function viewStudentJson($id)
	{
		$this->output->set_content_type('application/json');
		$this->load->model('Student/Student_model');
		$data= $this->Student_model->getStudentRecord($id);
		echo json_encode($data);
		
	}



	function viewStudent1($id)
	{
		  
		$student = new Student ();
		$student=$student->getStudent($id);
		//$student= $student;

		$address = new address ();
		$data['student']= $address->getStudentadd($student);

		//echo json_encode($data);
		/*
		$skills = new skills ();
		$data['skill']= $skills->getStudentskill($id);*/
		
		$this->load->view('student/singleview1',$data);
	}






	function ViewRecordbyId()
	{
		
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




	

	