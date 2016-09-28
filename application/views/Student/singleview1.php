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
       
       			echo "student id: &nbsp;";
                            echo $student->getStd_id();
       			echo"<br>";

       			echo "student name: &nbsp;";
                            echo $student->getStd_name();
                            echo"<br>";

                            echo "student address: &nbsp;";
                            echo $student->getAdd_line1();
                            echo "<br>";

                            echo "student address: &nbsp;";
                            echo $student->address->zipcode;
                            echo "<br>";
                            
                            echo "student city: &nbsp;";
                            echo $student->address->city;
                            echo "<br>";

                            echo "student state: &nbsp;";
                            echo $student->address->state;
                            echo "<br>";

                           /* echo "student skill: &nbsp;";
                            echo $skill->skill;
                            echo "<br>";*/
                            



       	    

		 ?>

		 
	
	</body>
</html>