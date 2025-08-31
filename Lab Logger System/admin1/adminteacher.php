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
  $query="select * from teacher where TeacherId='$id'";
  $result=mysql_query($query) or die(mysql_error());
?>
<center><h1>UPDATE TEACHER DETAILS</h1></center>
    <table align="center" border="1" cellpadding="5" cellspacing="0">
      <tr>
	<th>Teacher Id</th>
	<th>Name</th>
	<th>Contact</th>
	<th>Email</th>
	<th>department</th>
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
 <td><a href="adminteacherupdateaction.php?id=<?php echo $row[0]?>" class="btn">Edit</a>
 <td><a href="adminteacherdeleteaction.php?id=<?php echo $row[0]?>" class="btn">Delete</a>
</tr>
<?php
}
?>
</table>
</div>
</center>
</body>
</html>

     
