<?php 
session_start();
if($_SESSION['loggedIn']!=1){
	header("location:logout.php");
}

 ?>
 <p><a href="logout.php">Logout</a></p>