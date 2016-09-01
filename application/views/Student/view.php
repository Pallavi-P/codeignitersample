<html>
<body>
  <h2  align='center'> single student record</h2>
<?php
  
	echo "<table align='center' border='1'>";
      echo "<tr>";
      echo "<th>student id</th>";
      echo "<th>student name</th>";
      echo "<th>address line</th>";
      echo "<th>zipcode</th>";
               
      echo "</tr>";
     
    
  foreach ($val as $v)
	{ 
    
      echo "<tr>";
      echo "<td>" .$v->std_id . "</td>";
      echo "<td>" . $v->std_name . "</td>";
      echo "<td>" .$v->add_line1. "</td>";
      echo "<td>" . $v->zipcode . "</td><br>";
      echo "</tr>";
  }
 
    echo "</table>";




  echo "<table align='center' border='1'>";
      echo "<tr>";
      
      echo "<th>skill area1</th>";
      echo "<th>skill area2</th>";
      echo "<th>skill area3</th>";
               
      echo "</tr>";
     
    
  foreach ($skill as $s)
  { 
    
      echo "<tr>";
      
      echo "<td>" . $s->skill_1 . "</td>";
      echo "<td>" .$s->skill2. "</td>";
      echo "<td>" . $s->skill_3 . "</td><br>";
      echo "</tr>";
  }
 
    echo "</table>";


?>
<style>
table
  {
    align:"center";
    width: 50%;
    border-collapse: collapse;
  }


  table, td, th 
  {
    text-align: center;
    border: 1px solid black;
  }

  body 
  {
    background-color: #e6f7ff;
    margin: 40px;
    font: 13px/20px normal Helvetica, Arial, sans-serif;
    color: #4F5155;
  }

</style>



<a href="<?php echo site_url('Student/student_controller/delete');?>"> Delete<br></a>
<a href="<?php echo site_url('Student/student_controller');?>"> Exit<br></a>

</body>
</html>

