<?php
 include("dbconn.php");
 $id=$_GET['id'];

 $sql="delete from teacher where no='$id'";
 $result=mysql_query($sql);
 if($result){
    echo "<meta http-equiv=\"refresh\"content=\"0;URL=adminhome.php\">";
?>
<script>
  alert ("deleted succesfully...");
</script>
<?php
  }
   else{
    echo "<meta http-equiv=\"refresh\"content=\"0;URL=adminteacher.php\">";
  }
?>
