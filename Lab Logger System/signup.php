<?php
 include('dbconn.php');
?>
<?php
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['teacher_signup'])){
     $teacherId=$_POST['teacherId'];
     $teacherName=$_POST['teacherName'];
     $password=$_POST['password'];
     $teacherContact=$_POST['teacherContact'];
     $email=$_POST['email'];
     $teacherDepartment=$_POST['teacherDepartment'];

     $sql="insert into teacher values   ('$teacherId','$teacherName','$password','$teacherContact','$email','$teacherDepartment')";
     $query=mysql_query($sql) or die (mysql_error());
?>
<script>
   alert ("inserted successfully...");
</script>

<?php
   if($sql){
     header('Location:landing.html');
   }
  }

   elseif(isset($_POST['student_signup'])){
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
?>     
<script>
     alert('inserted successfully...');
</script>
<?php
   if($sql){
      header('Location:landing.html');
  }
 }
 }
?>
