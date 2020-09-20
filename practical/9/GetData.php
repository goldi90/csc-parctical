<?php
include ('../DBconn.php');
$query= "select * from data";
$result=mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>result from database</title>
</head>
<body>
	<table>
		<tr>
			<th><h2>Your Records</h2> </th>
		</tr>
		<t>
			<th> name</th>
			<th> email</th>
		</t>
		<?php
		 while($rows=mysqli_fetch_assoc($result))
		 {
		?>
			<tr>
				<td><?php echo $rows['name'];?></td>
				<td><?php echo $rows['email'];?></td>
			</tr>
			<?php 
				}
			?>
	</table>

</body>
</html>
