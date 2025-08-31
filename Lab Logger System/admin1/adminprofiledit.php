<html>
 <body>
  <center>
   <div>
  <?php
    include("dbconn.php");
    $query="select * from admin";
    $sql=mysql_query($query);
  ?>
  <form action='adminprofileditaction.php' method="POST">
   <center><h1>Update</h1></center>
     <table align="center" border="1" cellpadding="5" cellspacing="0">
  <?php
    while($row=mysql_fetch_array($sql))
     {
  ?>
      
      <tr>
	<th>Name</th>
	<td><input type="text" value="<?php echo $row[0];?>" name="a"></td>
      </tr>
      <tr>
	<th>Email</th>
	<td><input type="text" value="<?php echo $row[1];?>" name="b"></td>
      </tr>
      <tr>
	<th>Password</th>
	<td><input type="text" value="<?php echo $row[2];?>" name="c"></td>
      </tr>
  <?php
    }
  ?>
      </table>
      <br><br>
      <input class="submit" type="submit" value="submit">
    </form>
   </div>
  </center>
 </body>
</html>


