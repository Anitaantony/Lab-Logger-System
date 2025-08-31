<html>
 <body>
  <center>
   <div>
  <?php
    include("dbconn.php");
    $id=$_GET['id'];
    //$ad=$_GET['ad'];
    $query="select * from tasks where no='$id'";
    $sql=mysql_query($query);
  ?>
  <form action='stdtaskupdateaction2.php' method="POST">
   <center><h1>Update</h1></center>
     <table align="center" border="1" cellpadding="5" cellspacing="0">
  <?php
    while($row=mysql_fetch_array($sql))
     {
  ?>
      <tr>
	<td><input type="hidden" value="<?php echo $row[0];?>" name="z"></td>
      </tr>
  	<tr>
	<th>AdmissionNumber</th>
	<td><input type="text" value="<?php echo $row[1];?>" name="a"></td>
      </tr>
      <tr>
	<th>Programno</th>
	<td><input type="number" value="<?php echo $row[2];?>" name="b"></td>
      </tr>
      <tr>
	<th>Date</th>
	<td><input type="date" value="<?php echo $row[3];?>" name="c"></td>
      </tr>
      <tr>
	<th>Day</th>
	<td><input type="text" value="<?php echo $row[4];?>" name="d"></td>
      </tr>
      <tr>
	<th>Programname</th>
	<td><input type="text" value="<?php echo $row[5];?>" name="e"></td>
      </tr>
      <tr>
	<th>Language</th>
	<td><input type="text" value="<?php echo $row[6];?>" name="f"></td>
      </tr>
      <tr>
	<th>Teacher</th>
	<td><input type="text" value="<?php echo $row[7];?>" name="g"></td>
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


