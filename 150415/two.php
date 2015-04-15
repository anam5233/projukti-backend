<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php table</title>
</head>
<body>
	<?php 

	$myarr =array("a","b","c","d");

		$num = array();
		$num[0] = "one";
		$num[1] = "two";
		$num[2] = "three";
		$num[3] = "four";
		echo "length of the array is  ".count($num);

		echo "<table border='1'>";

		for($a=0; $a< count($num); $a++){
			echo "<tr><td>".$num[$a]."</td></tr>";
			
			// echo "";
		}

		echo "</table>";

		for($x= 0; $x<=10; $x++){
			echo $x."<br>";

		}

	?>
</body>
</html>