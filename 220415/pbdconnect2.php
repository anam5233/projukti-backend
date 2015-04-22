<?php 
session_start();


$server = "localhost";
$dbname = "my_demo";
$user = "root";
$pass = "";

$myconnection = mysqli_connect($server, $user, $pass) ;

if(!$myconnection){
	die("mysql error : ". mysqli_connect_error());
}
	
echo "connection successfull<br>";

$mydatabse = mysqli_select_db($myconnection, $dbname);

if(!$mydatabse){
	echo "database connection error". mysqli_error();
}
else{
	echo "connect with database successfull";
}

// if (mysqli_query($myconnection, $mydatabse)) {
// 	echo "connection with database successfull";
// }
// else{
// 	echo "connection error while connecting with database";
// }


//mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error : ". mysql_error());
//mysql_select_db($dbname) or die("MySQL Error : ". mysql_error());

?>

