<?php
 include "myconnection.php"; 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>simple form</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">	
</head>
<body>
<header>
	<div class="container">
		<div class="row">
			<h2>Lorem ipsum dolor sit amet.</h2>
		</div>
	</div>
</header>



<section class="myform">
	<div class="container">
		<div class="row">
		<div class="col-lg-6">
			<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
				<div class="form-group">
					<label for="name">your name
						<input type="text" name="name" id="name" class="form-control">
					</label>
				</div>
				<div class="form-group">
					<input type="submit" value="submit">
				</div>
				
			</form>
			<!-- end of the form -->
		</div>

		<div class="col-lg-6">
			<?php 

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				
				$name = $_POST['name'];
				if (empty($name)) {
					echo "<p class=\"error\">your input field is empty</p>";
				}
				else{
					echo "<p class=\"success\">your name is ". $name. "</p>";
				}
			}

			?>
		</div>
			

			
		</div>
	</div>
</section>





	

	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/myscript.js"></script>

	<!-- // <script src="js/myscript.js"></script> -->
</body>
</html>