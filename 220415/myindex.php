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
			<h2>Add your daily expenditure </h2>
		</div>
	</div>
</header>


<section class="mynewtable">
	<div class="container">
		<div class="row">
			<?php 

$self= $_SERVER['PHP_SELF'];
// include( "myconnection.php");
if(isset($_POST['submit'])){
	if (empty($_POST['date']) || empty($_POST['item']) || empty($_POST['expen'])) {
		echo ('<p class="error">you did not fill out the form correctly</p>');
	}
	else{
		$date = htmlspecialchars(mysql_real_escape_string($_POST['date']));
		$item = htmlspecialchars(mysql_real_escape_string($_POST['item']));
		$expen = htmlspecialchars(mysql_real_escape_string($_POST['expen']));

		$sql = "INSERT INTO expenditure SET dat = '$date',
											Total_item = '$item',
											Expenditure = '$expen';";
		if (@mysql_query($sql)) {
			echo ('<p class="success">thanks for shouting</p>');
		}
		else{
			echo ('<p class="error">There was an unexpecte error</p>');
		}
	}
}

$query = "SELECT * FROM 'expenditure' ORDER BY 'id' DESC LIMIT 8;";
$new_result = @mysql_query("$query") or 
	die('<p class="error">intilligent error</p>');

			 ?>
			 <table class="table table-bordered">
			 	<tr>
			 		<th>date</th>
			 		<th>total item</th>
			 		<th>expenditure</th>
			 	</tr>
<?php 
	while ($row = mysql_fetch_array($new_result)) {
		$d_date = stripcslashes($row['date']);
		$d_item = stripcslashes($row['Total_item']);
		$d_expen = stripcslashes($row['Expenditure']);

		echo(
			'<tr>
				<td>'.$d_date.'</td>
				<td>'.$d_item.'</td>
				<td>'.$d_expen.'</td>
			</tr>'
		);
	}


?>
			 </table>
			 <!-- end of the /.table -->

			 <form action="<?php $self ?>" method = "post">
			 	<input type="text" name="date" id="date" class="form-control" require placeholder="type your date">
			 	<input type="text" name="item" id="item" class="form-control" require placeholder="type your total item">
			 	<input type="text" name="expen" id="expen" class="form-control" require placeholder="type your total expenditure">
			 	<input type="submit" value="submit">
			 </form>

				

		</div>
		<!-- end of the /.row -->
	</div>
	<!-- end of the /.container -->
</section>
<!-- end of the /.mynewtable -->








	

	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/myscript.js"></script>

	<!-- // <script src="js/myscript.js"></script> -->
</body>
</html>