<?php
  include("dbconn.php");
  $a=$_POST['a'];
  $b=$_POST['b'];
  $c=$_POST['c'];
  $d=$_POST['d'];
  $e=$_POST['e'];
$query="UPDATE `teacher` SET `teacherId`='$a',`teacherName`='$b',`teacherContact`='$c',`email`='$d',`teacherDepartment`='$e' WHERE `teacherId`='$a'";
$result=mysql_query($query);
if($result){
header("Location:./adminhome.php");
?>
	<script>
         alert("Updated...");
      </script>
<?php
}
else{
	header("Location:./adminteacher.php");
}
?>

