<?php 
// ECHO "<pre>";
// print_r($_FILES);

// exit();

$img_name = $_FILES['img']['name'];
$img_type = $_FILES['img']['type'];
$img_tmp_name = $_FILES['img']['tmp_name'];
$img_error = $_FILES['img']['error'];
$img_size = $_FILES['img']['size'];

$destination = "uploads/".$img_name;

if($img_type=="image/jpeg" || $img_type=="image/jpg"||$img_type=="image/png"){
	if(move_uploaded_file($img_tmp_name, $destination)){
		echo "Image Uploaded";
	}
	else{
		echo "Error occured!Try again!"; 
	}
}
else{
	echo "Upload image only!";
}



 ?>