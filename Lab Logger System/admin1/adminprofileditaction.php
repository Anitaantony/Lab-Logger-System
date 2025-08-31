<?php
  include("dbconn.php");
  $a=$_POST['a'];
  $b=$_POST['b'];
  $c=$_POST['c'];
  $d=$_POST['d'];
$query="UPDATE `admin` SET `Name`='$a',`Email`='$b',`Password`='$c',";
$result=mysql_query($query);
if($result){
header("Location:./adminhome.html");
?>
	<script>
         alert("Updated...");
      </script>
<?php
}
else{
	header("Location:./adminprofile.php");
}
?>

