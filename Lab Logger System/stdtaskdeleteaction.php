<?php
 include("dbconn.php");
 $id=$_GET['id'];

 $sql="delete from tasks where no='$id'";
 $result=mysql_query($sql);
 if($result){
    echo "<meta http-equiv=\"refresh\"content=\"0;URL=stdtasks.html\">";
?>
<script>
  alert ("deleted succesfully...");
</script>
<?php
  }
   else{
    echo "<meta http-equiv=\"refresh\"content=\"0;URL=stdtaskdelete.php\">";
  }
?>
