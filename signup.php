<?php
 define('DB_HOST', 'localhost'); 
 define('DB_NAME', 'student');
 define('DB_USER','root');
 define('DB_PASSWORD',''); 
 $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());
 $db = mysqli_select_db($conn,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());
 function newuser()
{
	$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());
	$db = mysqli_select_db($conn,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());
	$name = $_POST['name'];
	$user = $_POST['user'];
	$email = $_POST['email'];
	$password = $_POST['pass'];
	$query = "insert into users values('$name','$email','$user','$password')";
	$data = mysqli_query($conn,$query)or die("Error: ".mysqli_error($conn));
	if($data)
	{
	echo "YOUR REGISTRATION IS COMPLETED...";
	}
}
function SignUp()
{
	$x=$_POST['user'];
	$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());
	$db = mysqli_select_db($conn,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());
if(!empty($x))   
{   

    $sql="SELECT * FROM users WHERE user = '$x'"; 
	$query = mysqli_query($conn,$sql) or die("Failed to connect to MySQL: " . mysqli_error());
	$row = mysqli_fetch_array($query);
	if(empty($row))
	{
		newuser();
	}
	else
	{
		echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
	}
}
}
if(isset($_POST['submit']))
{
	SignUp();
}
?>