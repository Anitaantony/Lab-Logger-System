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
  $query="select * from stddetails where AdmissionNumber='$id'";
  $result=mysql_query($query) or die(mysql_error());
?>
<center><h1>STUDENT LOGIN DETAILS</h1></center>
    <table align="center" border="1" cellpadding="5" cellspacing="0">
      <tr>
	<th>LOGIN TIME</th>
	<th>DATE</th>
	<th>DAY</th>
	<th>LANGUAGE</th>
	<th>TEACHER-IN-CHARGE</th>
	<th>LOGOUT TIME</th>
      </tr>
<?php
  
  while($row=mysql_fetch_array($result))  
   {
?>
<tr>
 <td><?php echo $row[1]?></td>
 <td><?php echo $row[2]?></td>
 <td><?php echo $row[3]?></td>
 <td><?php echo $row[4]?></td>
 <td><?php echo $row[5]?></td>
 <td><?php echo $row[6]?></td>
</tr>
<?php
}
?>
</table>
</div>
</center>
</body>
</html>

     
