<?php
  include("dbconn.php");
  $z=$_POST['z'];
  $a=$_POST['a'];
  $b=$_POST['b'];
  $c=$_POST['c'];
  $d=$_POST['d'];
  $e=$_POST['e'];
  $f=$_POST['f'];
  $g=$_POST['g'];
$query="UPDATE `tasks` SET `AdmissionNumber`='$a',`programno`='$b',`date`='$c',`day`='$d',`programname`='$e',`language`='$f',`teacher`='$g' WHERE no='$z'";
$result=mysql_query($query);
if($result){
header("Location:./stdtasks.html");
?>
	<script>
         alert("Updated...");
      </script>
<?php
}
else{
	header("Location:./stdtaskupdate.php");
}
?>

