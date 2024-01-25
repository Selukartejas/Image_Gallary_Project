<?php 
$conn=new mysqli("127.0.0.1:3307", "root", "", "gallery");
$email = $_POST['email'];
$password = $_POST['password'];

$q = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result=$conn->query($q);
if($result->num_rows==1){
	$data=$result->fetch_object();
	if($data->email==$email && $data->password==$password){
		session_start();
		$_SESSION['loggedIn']=True;
		header("location:dashboard.php");
	}
	else{
		header("location:login.php"); 
	}
}
else{
	header("location:login.php"); 
}
 ?>

