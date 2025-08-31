<?php
 include('dbconn.php');
?>
<?php
     $AdmissionNumber=$_POST['admissionnumber'];
     $programno=$_POST['pgmno'];
     $date=$_POST['date'];
     $day=$_POST['day'];
     $programname=$_POST['name'];
     $language=$_POST['language'];
     $teacher=$_POST['teacher'];

     $sql="insert into tasks values('','$AdmissionNumber','$programno','$date','$day','$programname','$language','$teacher')";
     $query=mysql_query($sql) or die (mysql_error());
     if($query){
 ?>
    <script>
        alert ("Inserted succesfully...");
    </script>
<?php
    }
?>
