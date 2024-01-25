<?php 
// ECHO "<pre>";
// print_r($_FILES);
// exit();
$img_name = $_FILES['img']['name'];
$img_type = $_FILES['img']['type'];
$img_tmp_name = $_FILES['img']['tmp_name'];
$img_error = $_FILES['img']['error'];
$img_size = $_FILES['img']['size'];

// echo $img_name;
$res = explode('.', $img_name);
// print_r($res);
// exit();


if($res[1]=='png' || $res[1]=='jpeg'||$res[1]=='jpg'|| $res[1]=='svg'){
	$destination = "uploads/img/".$img_name;
	$msg="Image Uploaded!";
}
elseif($res[1]=='pdf'){
	$destination = "uploads/pdf/".$img_name;
	$msg="PDF Uploaded!";

}else{
	$destination = "uploads/documents/".$img_name;
	$msg="Documents Uploaded!";
}

if(move_uploaded_file($img_tmp_name, $destination)){
	echo $msg;
}
else{
	echo "Error occured!Try again!"; 
}