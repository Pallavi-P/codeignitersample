<html>
<style>
body 
	{
		background-color: #e6f7ff;
		margin: 50px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}


	input
	{
    	width: 30%;
	}
</style>
	<body>
			
       <?php 
       foreach ($student as $v)
       		{
       			
       		echo form_open('Student/student_controller/updateStudent/'.$v->std_id);
       		}
       		foreach ($student as $v)
       		{
       			

       			echo "student id &nbsp;";
       			echo form_input('Student ID', $v->std_id);
       			echo"<br><br>";

       			echo "student name &nbsp;";
       			echo form_input('Student name', $v->std_name);
       	              echo"<br><br>";

       	              echo "Student address &nbsp;";
       			echo form_input('Student address', $v->add_line1);
       	              echo"<br><br>";

       	              echo "zipcode &nbsp;";
       			echo form_input('zipcode', $v->zipcode);
       	              echo"<br><br>";

       	              echo "city &nbsp;";
       			echo form_input('city', $v->city);
       	              echo"<br><br>";

       	              echo "state &nbsp;";
       			echo form_input('state', $v->state);
       	              echo"<br><br>";



       	    } 
                  
			foreach ($skills as $v)
       	       {
				echo "student skill  &nbsp;";
       			echo form_input('Student skill', $v->skill);
       	              echo"<br><br>";
       	   	}

       	   	         foreach ($courses as $key => $v) 
       	   	{
       	   		echo "Student course  &nbsp;";
       			echo form_input('Student course', $v->course_name);
       	              echo"<br><br>";
       	       }

		 ?>

		 <button type="submit">Update</button>
	
	</body>
</html>