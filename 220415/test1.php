
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


<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
	
