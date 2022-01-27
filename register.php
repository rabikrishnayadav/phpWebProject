<?php include('links.php'); ?>
<header id="header" class="container bg-secondary text-light">
	<h1 class="text-center p-1">Complete WebSite in PHP</h1>
	<div class="row">
		<div class="col-xl-10">
		</div>
		<div class="col-xl-2">
			<a href="login.php" class="btn btn-success">Login</a>
		</div>
	</div>
</header>
<div id="menu" class="container bg-dark">
	<?php include('assets/component/navbar.php'); ?>
</div>
<div class="container w-50">
	<form method="post" action="users/reg_user_validation.php" enctype="multipart/form-data">
		<div class="m-auto p-2 w-50">
			<h3 class="text-center font-weight-bold">Registration Form</h3>
			<div class="form-group">
			<label for="username">Username:</label>
			<input type="text" name="username" placeholder="Username" class="form-control" required>
			</div>
			<div class="form-group">
			<label for="password">Password:</label>
			<input type="password" name="password" placeholder="password" class="form-control" required>
			</div>
			<div class="form-group">
			<label for="address">Address:</label>
			<input type="text" name="address" placeholder="address" class="form-control" required>
			</div>
			<div class="form-group pt-2">
			Gender: &nbsp;&nbsp;
			<input type="radio" name="gender" value="male">&nbsp;Male &nbsp;
			<input type="radio" name="gender" value="female">&nbsp;Female &nbsp;
			<input type="radio" name="gender" value="other">&nbsp;Not Say &nbsp;
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
					<option value="nepal">Nepal</option>
					<option value="india">India</option>
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
<div>
	<?php include('assets/component/footer.php'); ?>
</div>