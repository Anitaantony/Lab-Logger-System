<html>
 <body>
 <?php
   include("dbconn.php");
   $id=$_POST['id'];
   $sql="select * from student where AdmissionNumber='$id'";
   $query=mysql_query($sql);
 ?>
 <center>
 <div>
   <h1><u>Student</u></h1>
   <table align="center" border="1" cellpadding="10" cellspacing="0">
  <?php
   while($row=mysql_fetch_array($query))
    {
     ?>
      <tr> 
	<th>Admisssion Number</th>
 	<td><?php echo $row[0]?></td>
      </tr>
      <tr> 
	<th>Name</th>
 	<td><?php echo $row[1]?></td>
      </tr>
      <tr> 
	<th>Contact</th>
 	<td><?php echo $row[3]?></td>
      </tr>
      <tr> 
	<th>Email</th>
 	<td><?php echo $row[4]?></td>
      </tr>
      <tr> 
	<th>Course</th>
 	<td><?php echo $row[5]?></td>
      </tr>
      <tr> 
	<th>Batch</th>
 	<td><?php echo $row[6]?></td>
      </tr>
      <tr> 
	<th>Year</th>
 	<td><?php echo $row[7]?></td>
      </tr>
    <?php
   }
    ?>
    </table>
   </div>
  </center>
 </body>
</html>

