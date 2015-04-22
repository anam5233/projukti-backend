<?php
$mysqli = new mysqli("localhost", "root", "", "my_demo");

$firstName = "x";
$lastName = "y";
$occupation = "z";

$result = $mysqli->query("INSERT INTO demo_book (f_name, l_name, occupation) VALUES ('$firstName', '$lastName', '$occupation')");

if ($result) : ?> 

	<p>Added a record for <?php echo ($firstName); ?> the singer.</p> 
	<a href="myindex2.php">Now go see your new record in action.</a>

<?php endif; ?>