<?php
  include("dbconn.php");
  session_start();
  if($_SERVER['REQUEST_METHOD']==='POST'){
    $user=$_POST['user'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $table=' ';
    switch($user){
	case 'student':
		$table="student";
		break;
	case 'teacher':
		$table="teacher";
		break;
	//case 'admin':
		//$table="Admin";
		//break;
	default:
		echo "invalid user";
		break;
		exit;
	}
   $sql="select * from $table where email='$email' and password='$password'";
   $result=mysql_query($sql);
   if(mysql_num_rows($result)>0){
     $row=mysql_fetch_assoc($result);
     switch($user){
	case 'student':
		  $_SESSION['reg']=$row['AdmissionNumber'];
		  $_SESSION['name']=$row['studentName'];
		header('Location:studenthome.php');
                  break;
	case 'teacher':
		$_SESSION['reg']=$row['teacherId'];
		$_SESSION['name']=$row['teacherName'];
		header('Location:teacherhome.php');
                  break;
	//case 'Admin':
		//$_SESSION['name']=$row['Name'];
		//header('Location:adminhome.php');
                //  break;
       }
    }
   else{
?>
<script>
	alert('Invalid Credentials');
</script>
<?php
   }
  }
?>
