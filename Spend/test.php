<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>test</title>
</head>
<body>

<?php 

	$user = "root";
	$server = "localhost";
	$pass = "";

	// create connection
	$mycon = new mysqli($server, $user, $pass);

	// check connection
	if ($mycon -> connect_error) {
		die("connection failed : ". $mycon -> connect_error);
	}
	echo "connected successfully";

?>
	
</body>
</html>