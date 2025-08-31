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
  $query="select * from tasks where AdmissionNumber='$id'";
  $result=mysql_query($query) or die(mysql_error());
?>
<center><h1>DELETE RECORD DETAILS</h1></center>
    <table align="center" border="1" cellpadding="5" cellspacing="0">
      <tr>
	<th>Program Number</th>
	<th>Date</th>
	<th>Day</th>
	<th>Program Name</th>
	<th>Language</th>
	<th>Teacher-In-Charge</th>
	<th>Delete</th>
      </tr>
<?php
  
  while($row=mysql_fetch_array($result))  
   {
?>
<tr>
 <td><?php echo $row[2]?></td>
 <td><?php echo $row[3]?></td>
 <td><?php echo $row[4]?></td>
 <td><?php echo $row[5]?></td>
 <td><?php echo $row[6]?></td>
 <td><?php echo $row[7]?></td>
 <td><a href="stdtaskdeleteaction.php?id=<?php echo $row[0]?>" class="btn">Delete</a>
</tr>
<?php
}
?>
</table>
</div>
</center>
</body>
</html>

     
