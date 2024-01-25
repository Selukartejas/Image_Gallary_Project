<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Image Upload</title>
</head>
<body>
	<h2>Image Upload</h2>
	<form method="post" action="getdata.php" enctype="multipart/form-data">
		<p><input type="file" name="img"></p>
		<p>
			<select name="category">
				<option value="Animal">Animal</option>
				<option value="Plants">Plants</option>
				<option value="Wallpaper">Wallpaper</option>
				<option value="Others">Others</option>
			</select>
		</p>
		<p><input type="submit" value="Upload"></p>
	</form>
</body>
</html>