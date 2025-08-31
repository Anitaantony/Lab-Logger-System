<?php
 include('dbconn.php');
?>
<?php
     $teacherId=$_POST['teacherId'];
     $teacherName=$_POST['teacherName'];
     $password=$_POST['password'];
     $teacherContact=$_POST['teacherContact'];
     $email=$_POST['email'];
     $teacherDepartment=$_POST['teacherDepartment'];

     $sql="insert into teacher values   ('$teacherId','$teacherName','$password','$teacherContact','$email','$teacherDepartment')";
     $query=mysql_query($sql) or die (mysql_error());
     if($query){
 ?>
    <script>
        alert ("Inserted succesfully...");
    </script>
<?php
    }
?>