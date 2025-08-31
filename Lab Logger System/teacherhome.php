<html>
 <head>
  <title>Teacher Home</title>
  <link rel="stylesheet" href="home.css">
 </head>
 <body>
   <?php
      session_start();
      $name=$_SESSION['name'];
   ?>
   <div class="sidebar">
     <ul>
        <li><a href="teacherhome.php"><span>Home</span></a></li>
        <li><a href="tealogin.html"><span>Login Details</span></a></li>
        <li><a href="teatasks.html"><span>Tasks</span></a></li>
        <li class="logout"><a href="logout.php"><span>Logout</span></a></li>
     </ul>
   </div>
   <div class="main">
     <div class="header">
        <div class="title">
         <?php
             echo"<span>Welcome,$name </span>";
         ?>
	   <h3></h3>
        </div>
        <div class="info">
           <div class="search">
               <input type="text" placeholder="Search"/>
           </div>
        </div>
     </div>
        <div class="sider">
	   <div class="column">
	      <h3 class="head1">My Apps</h3>
 	      <div class="cir">
		<div class="circle">
		   <div class="cir1" id="cir2">
			<a href="teadetails.php">Student Details</a>
		   </div>
		   <div class="cir1" id="cir2">
			<a href="tealogin.html">Login Details</a>
		   </div>
		   <div class="cir1" id="cir2">
			<a href="teatasks.html">Tasks</a>
		   </div>
		</div>
	      </div>
	  </div>
       </div>
 </body>
</html>
