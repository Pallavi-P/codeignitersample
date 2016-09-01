<html>
<h2 align="center">student records:</h2>


<?php

		echo "<table align='center' border='1'>";
		echo"<tr>";
		echo"<th>std id</th>";
		echo"<th>std name</th>";
		echo"<th>add line1</th>";
		echo"<th>zip code</th>";
		echo"<th></th>";
		echo"</tr>";
		foreach ($val as $v)
		{

			echo"<tr>";
			echo"<td>".$v->std_id."</td>";
			echo"<td>".$v->std_name."</td>";
			echo"<td>".$v->add_line1."</td>";
			echo"<td>".$v->zipcode."</td>";
?>
			<td><a href="<?php echo site_url('Student/student_controller/viewStudent/'.$v->std_id);?>">view</a></td>
<?php
			echo"</tr>";

		
		}
		echo"</table>";
?>




	<style type="text/css">

	table
	{
		align:"center";
		width: 70%;
    	border-collapse: collapse;
	}


	table, td, th 
	{
		text-align: center;
    	border: 1px solid black;
	}

	tr:nth-child(even){background-color: #f2f2f2}
	body 
	{
		background-color: #e6f7ff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	
	#body
	{
		margin: 0 15px 0 15px;
	}

	a
	{
    color: hotpink;
	}

	</style>




	<div style="text-align:center">	
	<a href="<?php echo site_url('Student/student_controller/adddata');?>"> Add<br></a>-
	<a href="<?php echo site_url('Student/student_controller/searchdata');?>">filter<br></a>
	</div>


	</html>