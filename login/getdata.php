<?php 
//fetch data from post method
$email = $_POST['email'];
$password = $_POST['password'];

if($email=="scott@gmail.com" && $password==123){
    // for redirecting user
    header("location:welcome.php");
}
else{
    echo "<p>Unauthorized user!</p>";
}