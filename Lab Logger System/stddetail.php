<html>
 <head>
  <title>Student Login Details</title>
  <link rel="stylesheet" href="home.css">
 </head>
 <body>
	<?php
		session_start();
		$name=$_SESSION['name'];
	?>
	<div class="sidebar">
     <ul>
        <li><a href="studenthome.php"><span>Home</span></a></li>
        <li><a href="stddetail.php"><span>Add Details</span></a></li>
        <li><a href="stddetailsview.php"><span>View Details</span></a></li>
     </ul>
   </div>
   <div class="main">
    <center>
      <font  size="6">
      <table cellspacing="2" cellpadding="2" width="30%" height="50%">
      <form method="POST" action="stddetails.php">
      <u><h2>Login Details:</h2></u><br><br>
      <tr>
	       <td>Admission Number:</td>
	       <td><input type="text" value="<?php echo ['reg'] ?>" name="admissionnumber" required> </td>
  	</tr>
  	<tr>
	       <td>Login Time:</td>
	       <td><input type="time" name="login" required> </td>
  	</tr>
 	 <tr>
	     <td>Date:</td>
	       <td><input type="date"  name="date" required></td>
 	 </tr>
 	 <tr>
	     <td>Day:</td>
	      <td> <input type="text" name="day"required> </td>
	</tr>
  	<tr>
	     <td>Select the language:</td>
	     <td>
	           <select name="language">
				<option value ="C">C</option>
				<option value ="C++">C++</option>
				<option value ="Data Structure">Data Structure</option>
				<option value ="PHP">PHP</option>
				<option value ="Linux">Linux</option>
				<option value ="Java">Java</option>
				<option value ="Mini Project">Mini Project</option>
			</select>
	      </td>
 	</tr>
	<tr>
	     <td>Teacher-in-charge:</td>
	       <td>
	       <select name="teacher">
				<option value ="Bilas Joseph">Bilas Joseph</option>
				<option value ="Remimol P Thomas">Remimol P Thomas</option>
				<option value ="Asha Ramachandran">Asha Ramachandran</option>
				<option value ="Seena S Nair">Seena S Nair</option>
				<option value ="Jephin Jose">Jephin Jose</option>
			</select>
	      
  	<tr>
	   <td>Logout Time:</td>
	      <td> <input type="time" name="logout" required> </td>
	  </tr>
    	</table>
	  <button type="submit" class="submit-btn">Submit</button>
     </form>
    </center>
   </body>
</html>
