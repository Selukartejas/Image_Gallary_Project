<?php 
session_start();
if($_SESSION['loggedIn']!=True){
  session_destroy();
  header("location:logout.php");
}


// Database Connection
$conn = new mysqli("127.0.0.1:3307", "root", "","gallery");

$img_name = $_FILES['img']['name'];
$img_type = $_FILES['img']['type'];
$img_tmp_name = $_FILES['img']['tmp_name'];
$img_error = $_FILES['img']['error'];
$img_size = $_FILES['img']['size'];

$category = $_POST['category'];

$res = explode('.', $img_name);
$destination = "uploads/img/".$img_name;

if($res[1]=='png' || $res[1]=='jpeg'||$res[1]=='jpg'|| $res[1]=='svg'){
	
	if(move_uploaded_file($img_tmp_name, $destination)){
		$query = "INSERT INTO images VALUES(null, '$img_name','$destination', '$category', NOW())";
		$conn->query($query);
		header("location:admin_view.php");
	}
	else{
		echo "Error occured!Try again!"; 
	}
}
