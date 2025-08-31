<?php
  include("dbconn.php");
  $a=$_POST['a'];
  $b=$_POST['b'];
  $c=$_POST['c'];
  $d=$_POST['d'];
  $e=$_POST['e'];
  $f=$_POST['f'];
  $g=$_POST['g'];
$query="UPDATE `student` SET `AdmissionNumber`='$a',`studentName`='$b',`studentContact`='$c',`email`='$d',`studentCourse`='$e',`Batch`='$f',`Year`='$g' WHERE no='$a'";
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
	header("Location:./adminstudent.php");
}
?>

