<html>
 <head>
   <title>Admin</title>
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
        <li><a href="adminprofile.php"><span>Profile</span></a></li>
        <li><a href="adminadduser.php"><span>Add User</span></a></li>
        <li><a href="adminaddteacher.html"><span>Teacher</span></a></li>
        <li><a href="adminaddstudent.html"><span>Student</span></a></li>
        <li><a href=""><span>Login Details</span></a></li>
        <li class="logout"><a href="logout.php"><span>Logout</span></a></li>
     </ul>
</div>
   <div class="main">
     <div class="header">
        <div class="title">
           <h1>New User</h1>
        </div> 
     </div>
     <div class="main">
     <div class="header">
        <div class="title">
          <?php
             echo"<span>New User</span>";
          ?>
        </div>
     </div>
        <div class="sider">
	   <div class="column">
 	    <div class="cir">
		<div class="circle">
		   <div class="cir1" id="cir2">
			<a href="adminaddteacher.html">Teacher</a>
		   </div>
		   <div class="cir1" id="cir2">
			<a href="adminaddstudent.html">Student</a>
		   </div>
		</div>
	      </div>
	  </div>
