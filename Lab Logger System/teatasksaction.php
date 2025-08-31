<html>
<body>
<center>
<div>
<?php
  include("dbconn.php");
?>
<?php
  $id=$_POST['id'];
  $query="select * from tasks where AdmissionNumber='$id'";
  $result=mysql_query($query) or die(mysql_error());
?>
<center><h1>TASKS</h1></center>
    <table align="center" border="1" cellpadding="5" cellspacing="0">
      <tr>
	<th>PROGRAM NO:</th>
	<th>DATE</th>
	<th>DAY</th>
	<th>PROGRAM NAME</th>
	<th>LANGUAGE</th>
	<th>TEACHER</th>
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
</tr>
<?php
}
?>
</table>
</div>
</center>
</body>
</html>


