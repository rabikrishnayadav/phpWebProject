<?php
include('../assets/component/db_con.php');
?>
<table border="1" cellpadding="10" align="center" class="">
	<caption>Users Data List</caption>
	<thead>
		<tr>
			<th>Username</th>
			<th>Password</th>
			<th>Address</th>
			<th>Gender</th>
			<th>Education</th>
			<th>Country</th>
			<th>Photo</th>
		</tr>
	</thead>
	<?php
	$sqlSearchQuery = "select * from users"; 

	$sql_query = mysqli_query($con,$sqlSearchQuery);
	
	$user_total_row = mysqli_num_rows($sql_query);
	
	for($rows=1; $rows <= $user_total_row; $rows++) {
		$cols_in_row = mysqli_fetch_array($sql_query);
	?>
	<tbody>
		<tr>
			<td><?php echo $cols_in_row['username'] ?></td>
			<td><?php echo $cols_in_row['password'] ?></td>
			<td><?php echo $cols_in_row['address'] ?></td>
			<td><?php echo $cols_in_row['gender'] ?></td>
			<td><?php echo $cols_in_row['education'] ?></td>
			<td><?php echo $cols_in_row['country'] ?></td>
			<td><img src="../<?php echo $cols_in_row['photo'] ?>" width="150px" height="100px"></td>
		</tr>
	</tbody>
	<?php } ?>
</table>