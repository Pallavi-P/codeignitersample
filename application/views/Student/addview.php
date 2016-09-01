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


	input[type=text], select {
    width: 60%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	}

	div.textarea {
    width: 100px;
    height: 100px;
    overflow: scroll;

}
	
	
	.button {
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
	.button1 {width: 60%;}

	input[type=submit]:hover {
    background-color: #45a049;
	}

	div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20
	}
	</style>
</head>
<body>
	
<form action="<?php echo site_url('Student/student_controller/Add');?>" method="post">


std name<br> <input type = 'text' name='std_name' id='std_name' required><br>
add line1 <br><input type = 'text' name='add_line1' id='add_line1' required><br>
zipcode <br><input type='text' name='zipcode' id='zipecode' required><br>
city <br> <input type = 'text' name='city' id='city'><br>
state <br> <input type = 'text' name='state' id='state'><br>
skils <br> <input type = 'text' name='skill[]' id='skill[]'>
 <br> <input type = 'text' name='skill[]' id='skill[]'><br>
 <input type = 'text' name='skill[]' id='skill[]'><br>



course <br> <select name ="course_name[]" size="3" multiple>
			<?php
foreach ($course as $c)
{
	 ?><option value="<?php echo $c->course_id;?>"><?php echo $c->course_name;?></option>
<?php	
}

 ?></select>


<button class="button button1">Add</button><br>
</form> 

</body>
</html>