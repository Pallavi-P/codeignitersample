<html>
<head>

	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">


	body {
		background-color: #e6f7ff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}
	
	#body {
		margin: 0 15px 0 15px;
	}

	form
	{
    	align:"center";
	}



	input[type=text], select 
	{
   	 	width: 40%;
    	padding: 12px 20px;
   		margin: 8px 0;
    	display: inline-block;
   		border: 1px solid #ccc;
    	border-radius: 4px;
    	box-sizing: border-box;
	}
	
	.button 
	{
    	background-color: #4CAF50; /* Green */
    	border: none;
    	color: white;
    	padding: 15px 32px;
    	text-align: center;
    	text-decoration: none;
    	display: inline-block;
    	font-size: 16px;
    	margin: 4px 2px;
    	cursor: pointer;
	}	

	.button1 
		{width: 40%;}

	input[type=submit]:hover 
	{
    	background-color: #45a049;
	}

	div
	{
    	border-radius: 5px;
    	background-color: #f2f2f2;
    	padding: 20
	}
	</style>

</head>
<body>
<form action="http://www.pallavi.com/index.php/Student/student_controller/ViewRecordbyId" method="post">

student id <br><input type ='text' name='std_id' id='std_id' placeholder='search by student id...'><br>
<input type='submit' >
</form >  


</body>
</html>