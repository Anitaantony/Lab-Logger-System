<html>
 <body>
 <?php
   include("dbconn.php");
   //$id=$_POST['id'];
   $sql="select * from admin";
   $query=mysql_query($sql);
 ?>
 <center>
 <div>
   <h1><u>Admin</u></h1>
   <table align="center" border="1" cellpadding="10" cellspacing="0">
  <?php
   while($row=mysql_fetch_array($query))
    {
     ?>
      <tr> 
	<th>Name</th>
 	<td><?php echo $row[0]?></td>
      </tr>
      <tr> 
	<th>Email</th>
 	<td><?php echo $row[1]?></td>
      </tr>
      <tr> 
	<th>Password</th>
 	<td><?php echo $row[2]?></td>
      </tr>
    <?php
   }
    ?>
    <a href="adminprofiledit.php" >Edit </a>
    </table>
   </div>
  </center>
 </body>
</html>

