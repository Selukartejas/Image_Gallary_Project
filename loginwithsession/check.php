<?php 
$email = $_POST['email'];
$password = $_POST['password'];

if($email=="scott@gmail.com" && $password==123){
	session_start();
	$_SESSION['loggedIn']=True;
	header("location:welcome.php");

}
else{
	echo "invalid user";
}

 ?>