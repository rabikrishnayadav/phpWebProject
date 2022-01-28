<?php
include('../assets/component/db_con.php');
if (isset($_GET['update_id'])) {

$updata_data = $_GET['update_id'];

$sqlSearchQuery = "select * from users where id='$updata_data'";

$sql_query = mysqli_query($con,$sqlSearchQuery);

$result = mysqli_fetch_array($sql_query);
}

// set new value

if (isset($_REQUEST['submit'])) {

	// store the user data on variable
	$username = $_REQUEST['username'];
	$pwd = $_REQUEST['password'];
	$address = $_REQUEST['address'];
	$gender = $_REQUEST['gender'];
	$country = $_REQUEST['country'];

	$sqlInsertQuery = "update users set username='$username',password='$pwd',address='$address', gender='$gender', country='$country' where id='$updata_data'";

	$sql_query = mysqli_query($con,$sqlInsertQuery);

	header('location:user_list.php');
}
?>
<?php include('../links.php'); ?>
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
<header id="header" class="container bg-secondary text-light pb-2">
	<h1 class="text-center p-1">Complete WebSite in PHP</h1>
	<div class="row">
		<div class="col-xl-10">
		</div>
		<div class="col-xl-2">
			<a href="../login.php" class="btn btn-success">Login</a>
		</div>
	</div>
</header>
<div class="container w-50">
	<form method="post" action="" enctype="multipart/form-data">
		<div class="m-auto p-2 w-50">
			<h3 class="text-center font-weight-bold">Update Form Data</h3>
			<div class="form-group">
			<label for="username">Username:</label>
			<input type="text" name="username" placeholder="Username" value="<?php echo $result['username']; ?>" class="form-control" required>
			</div>
			<div class="form-group">
			<label for="password">Password:</label>
			<input type="password" name="password" placeholder="password" value="<?php echo $result['password']; ?>" class="form-control" required>
			</div>
			<div class="form-group">
			Address:<textarea cols="40%" rows="2" maxlength="130" name="address"><?php echo $result['address']; ?></textarea>
			</div>
			<div class="form-group pt-2">
			Gender: &nbsp;&nbsp;
			<input type="radio" name="gender" value="male"
			<?php 
			if ($result['gender'] == 'male') {
				echo 'checked';
			}
			?>
			>&nbsp;Male &nbsp;
			<input type="radio" name="gender" value="female"
			<?php 
			if ($result['gender'] == 'female') {
				echo 'checked';
			}
			?>
			>&nbsp;Female &nbsp;
			<input type="radio" name="gender" value="other"
			<?php 
			if ($result['gender'] == 'other') {
				echo 'checked';
			}
			?>
			>&nbsp;Not Say &nbsp;
			</div>
			<div class="form-group">
				Education: &nbsp;
				<input type="checkbox" name="education[]" value="html">HTML &nbsp;
				<input type="checkbox" name="education[]" value="css">CSS &nbsp;
				<input type="checkbox" name="education[]" value="javascript">JAVASCRIPT &nbsp;
				<input type="checkbox" name="education[]" value="php">PHP &nbsp;
			</div>
			<div class="form-group">
				Country:&nbsp;
				<select name="country">
					<option value="">Select Country</option>
					<option value="nepal"
					<?php 
					if ($result['country'] == 'nepal') {
						echo 'selected';
					}
					?>
					>Nepal</option>
					<option value="india"
					<?php 
					if ($result['country'] == 'india') {
						echo 'selected';
					}
					?>
					>India</option>
				</select>
			</div>
			<div class="form-group">
				Upload Image: &nbsp;
				<input type="file" name="photo">
			</div>
			<div class="form-group pt-2">
				<input type="submit" name="submit" value="Submit" class="btn btn-success">
				<input type="reset" name="reset" value="Reset" class="btn btn-warning">
			</div>
		</div>
	</form>
</div>
