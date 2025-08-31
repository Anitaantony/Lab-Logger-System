<?php
  include("dbconn.php");
  session_start();
  if($_SERVER['REQUEST_METHOD']==='POST'){
    $user=$_POST['user'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="select * from Admin where email='$email' and password='$password'";
   $result=mysql_query($sql);
   if(mysql_num_rows($result)>0){
     $row=mysql_fetch_assoc($result);
     $_SESSION['reg']=$row['no'];
		header('Location:adminhome.php');
		}
		}
?>
