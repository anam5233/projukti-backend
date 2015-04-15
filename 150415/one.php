<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php table</title>
</head>
<body>
	<table border="1">
		<?php 
			$a = 0;
			while($a<100){

					if($a == 10){
							echo <tr>;
					}


				echo "<td>".$a."</td><br>".;
				$a++;

				if($a == 10){
							echo </tr>;
					}
			}
		?>
	</table>
	<!-- end of the table -->
</body>
</html>