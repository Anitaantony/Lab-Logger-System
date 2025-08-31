<html>
 <head>
   <title>Admin Dashboard</title>
   <link rel="stylesheet" href="home.css">
   <style>
   .block{
     width:200px;
     height:100px;
     color:white;
     background:linear-gradient(to right,#00bbbb,#007a7a);
     border:2px solid grey;
     box-shadow:0 5 px 9px #DC143C;
     margin-top:10%;
     margin-left:15%;
     padding:10px;
     border-radius:30px;
     display:inline-block; 
     }
   </style>
 </head>
 <body>
<?php
   include("dbconn.php");
?>
<div class="sidebar">
     <ul>
        <li><a href="profile.php"><span>Profile</span></a></li>
        <li><a href="adminadduser.php"><span>Add User</span></a></li>
        <li><a href="adminteacher.php"><span>Teacher</span></a></li>
        <li><a href="adminstudent.php"><span>Student</span></a></li>
        <li><a href=""><span>Login Details</span></a></li>
        <li class="logout"><a href="logout.php"><span>Logout</span></a></li>
     </ul>
   </div>
   <div class="main">
     <div class="header">
        <div class="title">
           <h1>Admin Dashboard</h1>
        </div> 
     </div>
            <div class="mainblock">
                <div class="block" id="block1">
                <?php
                    echo "<h2 class='values'>Teachers</h2>";
                    $sql="select count(*) as totalteachers from teacher";
                    $result=mysql_query($sql);
                    if(mysql_num_rows($result)>0){
                    $row=mysql_fetch_assoc($result);
                    $totaluser=$row['totalteachers'];
                    echo "<p class='p'>Registered: $totaluser </p>";
                    }
                ?>
                </div>
                <div class="block" id="block2">
                <?php
                    echo "<h2 class='values'>Students</h2>";
                    $sqls="select count(*) as totalstud from student";
                    $results=mysql_query($sqls);
                    if(mysql_num_rows($results)>0){
                    $row=mysql_fetch_assoc($results);
                    $totaluser=$row['totalstud'];
                    echo "<p class='p'>Registered: $totaluser </p>";
                    }
                ?>  
                </div>
            </div>
        
           
 </div>
 <script>
    document.getElementById("block1").addEventListener("click",function(_){
    window.location.href="teacherdetails.php";
    });

    document.getElementById("block2").addEventListener("click",function(_){
    window.location.href="studentdetails.php";
    });
 </script>
 </body>
</html>

