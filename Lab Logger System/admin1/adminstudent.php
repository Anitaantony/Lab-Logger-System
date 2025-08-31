<html>
<body>
<center>
<div>
<?php
  include("dbconn.php");
  session_start();
  $id=$_SESSION['reg'];
?>
<?php
  $query="select * from student where AdmissionNumber='$id'";
  $result=mysql_query($query) or die(mysql_error());
?>
<center><h1>UPDATE STUDENT DETAILS</h1></center>
    <table align="center" border="1" cellpadding="5" cellspacing="0">
      <tr>
	<th>Admission Number</th>
	<th>Name</th>
	<th>Contact</th>
	<th>Email</th>
	<th>Course</th>
	<th>Batch</th>
	<th>Year</th>
	<th>Edit</th>
    <th>Delete</th>
      </tr>
<?php
  
  while($row=mysql_fetch_array($result))  
   {
?>
<tr>
 <td><?php echo $row[0]?></td>
 <td><?php echo $row[1]?></td>
 <td><?php echo $row[3]?></td>
 <td><?php echo $row[4]?></td>
 <td><?php echo $row[5]?></td>
 <td><?php echo $row[6]?></td>
 <td><?php echo $row[7]?></td>
 <td><a href="adminstudentupdateaction.php?id=<?php echo $row[0]?>" class="btn">Edit</a>
 <td><a href="adminstudentdeleteaction.php?id=<?php echo $row[0]?>" class="btn">Delete</a>
</tr>
<?php
}
?>
</table>
</div>
</center>
</body>
</html>

     
