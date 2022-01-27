<?php
include('../assets/component/db_con.php');
?>
<form method="get" action="delete_user.php">
<table border="1" cellpadding="10" align="center" class="">
	<caption><h2 class="font-weight-bolder text-center">Users Data List</h2></caption>
	<thead>
		<tr>
			<th>Username</th>
			<th>Password</th>
			<th>Address</th>
			<th>Gender</th>
			<th>Education</th>
			<th>Country</th>
			<th>Photo</th>
			<th colspan="2">
			<input type="submit" name="multi_delete" value="Delete Selected">
			</th>
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
			<td><a href="delete_user.php?delete_id=<?php echo $cols_in_row['id'] ?>" class="btn badge-danger">Delete</a></td>
			<td><input type="checkbox" name="checked_data[]" value="<?php echo $cols_in_row['id'] ?>"></td>
		</tr>
	</tbody>
	<?php } ?>
</table>
</form>