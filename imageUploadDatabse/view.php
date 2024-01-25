<?php 
// Database Connection
$conn = new mysqli("127.0.0.1:3307", "root", "","gallery");
$query = "SELECT * FROM images";
$result = $conn->query($query);
// print_r($result);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Image View</title>
 	<style type="text/css">
 		.container{
 			width: 100%;
 		}
 		.box{
 			width: 200px;
 			margin-left: 20px;
 			float: left;
 			text-align: center;
 			color: green;
 		}
 		.box img{
 			width: 100%;
 			height: 200px;
 		}
 	</style>
 </head>
 <body>
 	<p><a href="index.php">Upload Image</a></p>
	 <div class="container">
	 	
	 	<?php while($data = $result->fetch_object()) {
	 		echo "<div class='box'>";
	 		echo "<p><img src='$data->image_path'> </p>";
	 		echo "<p>$data->image_name</p>";
	 		echo "<p>Category: $data->category</p>";
	 		echo "</div>";
	}
	 	?>
	 </div>
 </body>
 </html>