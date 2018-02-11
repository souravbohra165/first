<?php
 define('DB_HOST', 'localhost'); 
 define('DB_NAME', 'student');
 define('DB_USER','root');
 define('DB_PASSWORD',''); 
 $con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());
 $db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());

 function SignIn() { 
		$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());
        $db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());
		session_start(); 
		$x=$_POST['teachername'];
		$y=$_POST['teacherpass'];
		if(!empty($x)) 
		       { 
		         $sql="SELECT * FROM tech where email ='$x' AND pass ='$y'";
				 
		         $query = mysqli_query($con,$sql); 
				 $row = mysqli_fetch_array($query); 
			if(!empty($row['email']) AND !empty($row['pass'])) 
			   {
				   $_SESSION['Username'] = $row['email'];
				   echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...   ".$_SESSION['Username'];
			   } 
			else 
			  { 
			     echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
	   		  } 
			 } 
			 } 
	   if(isset($_POST['submit'])) 
	       { 
	          SignIn(); 
		    } 
?>

