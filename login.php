<?php include('assets/component/links.php'); ?>
<header id="header" class="container bg-secondary text-light">
	<h1 class="text-center p-1">Complete WebSite in PHP</h1>
	<div class="row">
		<div class="col-xl-10">
		</div>
		<div class="col-xl-2">
			<a href="register.php" class="btn btn-success">SignUp</a>
		</div>
	</div>
</header>
<div id="menu" class="container bg-dark">
	<?php include('assets/component/navbar.php'); ?>
</div>
<div class="container w-50">
	<form method="get" action="users/old_user_validation.php">
		<div class="m-auto p-2 w-50">
			<h3 class="text-center font-weight-bold">Login Here.</h3>
			<div class="form-group">
			<label for="username">Username:</label>
			<input type="text" name="username" placeholder="Username" class="form-control" required>
			</div>
			<div class="form-group">
			<label for="password">Password:</label>
			<input type="password" name="password" placeholder="password" class="form-control" required>
			</div>
			<div class="form-group pt-2">
				<input type="submit" name="submit" value="Submit" class="btn btn-success">
			</div>
		</div>
	</form>
</div>
<div>
	<?php include('assets/component/footer.php'); ?>
</div>