<?php
 include('dbconn.php');
?>
<?php
     $AdmissionNumber=$_POST['admissionnumber'];
     $studentName=$_POST['studentName'];
     $password=$_POST['password'];
     $studentContact=$_POST['studentContact'];
     $email=$_POST['email'];
     $studentCourse=$_POST['studentcourse'];
     $studentBatch=$_POST['studentbatch'];
     $studentYear=$_POST['studentyear'];

     $sql="insert into student values('$AdmissionNumber','$studentName','$password','$studentContact','$email','$studentCourse','$studentBatch','$studentYear')";
     $query=mysql_query($sql) or die (mysql_error());     
     if($query){
?>
    <script>
        alert ("Inserted succesfully...");
    </script>
<?php
    }
?>
