<?php 
session_start();
if($_SESSION['loggedIn']!=True){
	session_destroy();
	header("location:logout.php");
}

$conn=new mysqli("127.0.0.1:3307", "root", "", "gallery");
// transfer data from url
$id = $_GET['id'];

$q = "DELETE FROM images WHERE id=$id";

if($conn->query($q)){
	header("location:admin_view.php");
}
else{
	echo "error occured!";
}

?>