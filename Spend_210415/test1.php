
<?php 

	$user = "root";
	$server = "localhost";
	$pass = "";

	// create connection
	$mycon =  mysqli_connect($server, $user, $pass);

	// check connection
	if (!$mycon) {
		die("connection failed : ". mysqli_connect_error());
	}
	echo "connected successfully";

?>
	
