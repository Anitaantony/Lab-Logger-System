<?php
 include('dbconn.php');
?>
<?php
     $AdmissionNumber=$_POST['admissionnumber'];
     $Login=$_POST['login'];
     $Date=('Y-m-d');
     $Day=$_POST['day'];
     $Language=$_POST['language'];
     $Teacher=$_POST['teacher'];
     $Logout=$_POST['logout'];

     $sql="insert into stddetails values('$AdmissionNumber','$Login','$Date','$Day','$Language','$Teacher','$Logout')";
     $query=mysql_query($sql) or die (mysql_error());
     if($query){
 ?>
    <script>
        alert("inserted successfully");
    </script>
<?php
     }
?>