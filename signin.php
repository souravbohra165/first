<?php
 define('DB_HOST', 'localhost'); 
 define('DB_NAME', 'student');
 define('DB_USER','root');
 define('DB_PASSWORD',''); 
 $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect: " . mysqli_error());
 $db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to Choose DB: " . mysqli_error($con));

 function SignIn() { 
		$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());
        $db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());
        //Session starts here
		//session_start(); 
		$x=$_POST['user'];
		$y=$_POST['pass'];
		if(!empty($x)) 
		       { 
		         $sql="SELECT * FROM users where user ='$x' AND pass ='$y'";
				 
		         $query = mysqli_query($con,$sql); 
				 $row = mysqli_fetch_array($query); 
			if(!empty($row['user']) AND !empty($row['pass'])) 
			   {
				   /*$_SESSION['Username'] = $row['Username'];
				   $_SESSION['lastactivity']=$_SESSION['Request_time'];*/
				   echo "<center><strong>SUCCESSFULLY LOGIN TO USER PROFILE PAGE... </strong></center> ";
			   } 
			else 
			  { 
			     echo "SORRY... YOU ENTERED WRONG ID AND PASSWORD... PLEASE RETRY...";
	   		  } 
			 } 
			 } 
	   if(isset($_POST['submit'])) 
	       { 
	          SignIn(); 
		    } 
?>

