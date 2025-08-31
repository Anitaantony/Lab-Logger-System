<html>
 <body>
  <center>
   <h1> View Student Details</h1>
     <form action="teatasksaction.php" method="POST">Select the student Admission number:<select type="dropdown" name="id">
   <?php
     include("dbconn.php");
     $s=mysql_query("select AdmissionNumber from student");
     while($q=mysql_fetch_array($s))
       {
 	echo "<option>" .$q[0]."</option>";
       }
   ?>
   </select>
   <br><br>
   <input type="submit" value="View">
     </form>
   </center>
  </body>
</html>

     
