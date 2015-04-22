<?php
$mysqli = mysqli_connect("localhost", "root", "", "my_demo");

$result = $mysqli->query("SELECT * FROM demo_book");

if ($results) : ?>

<table> 
<tr> 
	<th> ID </th> 
	<th> First Name </th> 
	<th> Last Name </th> 
	<th> Occupation </th> 
</tr> 
</table>


<?php endif; ?>

<?php while ($row = $result->fetch_object()) : ?>
<tr> 
	<td><?php echo $row->id; ?></td> 
	<td><?php echo $row->f_name; ?></td> 
	<td><?php echo $row->l_name; ?></td> 
	<td><?php echo $row->occupation; ?></td>
</tr><br>
<?php endwhile; ?>

