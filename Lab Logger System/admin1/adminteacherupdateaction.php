<html>
 <body>
  <center>
   <div>
  <?php
    include("dbconn.php");
    $id=$_GET['id'];;
    $query="select * from teacher where no='$id'";
    $sql=mysql_query($query);
  ?>
  <form action='adminteacherupdateaction2.php' method="POST">
   <center><h1>Update</h1></center>
     <table align="center" border="1" cellpadding="5" cellspacing="0">
  <?php
    while($row=mysql_fetch_array($sql))
     {
  ?>
  	<tr>
	<th>teacherId</th>
	<td><input type="text" value="<?php echo $row[0];?>" name="a"></td>
      </tr>
      <tr>
	<th>teacherName</th>
	<td><input type="number" value="<?php echo $row[1];?>" name="b"></td>
      </tr>
      <tr>
	<th>teacherContact</th>
	<td><input type="date" value="<?php echo $row[3];?>" name="c"></td>
      </tr>
      <tr>
	<th>teacherEmail</th>
	<td><input type="text" value="<?php echo $row[4];?>" name="d"></td>
      </tr>
      <tr>
	<th>teacherDepartment</th>
	<td><input type="text" value="<?php echo $row[5];?>" name="e"></td>
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


