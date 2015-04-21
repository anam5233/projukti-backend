<?php include "myconnection.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>title</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	
	
</head>
<body>

<header>
	<div class="container">
		<div class="row">
			<h2>Add your daily expenditure </h2>
		</div>
	</div>
</header>

<section class="mytable">
	<div class="container">
		<div class="row">
			<table class="table table-bordered">
				<form action="">
				<tr>
					<th>Add your total item</th>
					<th><input type="text" name="date" id="date" class="form-control" required placeholder="enter your date here"></th>
				</tr>
				<tr>
					<td><input type="text" name="item" id="item" class="form-control" required placeholder="your total item"></td>
					<td><input type="text" name="expen" id="expen" class="form-control" required placeholder="your total expenditure"></td>
				</tr>
				<tr>
					<td colspan="2" class="text-center"><button class="btn btn-default" type="submit">submit</button></td>
				</tr>
				</form>
			</table>
		</div>
	</div>
</section>
<!-- end of the section/.mytable -->
	

	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/myscript.js"></script>

	<!-- // <script src="js/myscript.js"></script> -->
</body>
</html>