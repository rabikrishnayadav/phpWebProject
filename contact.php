<?php
include('links.php');
?>
<header id="header" class="container bg-secondary text-light">
	<h1 class="text-center p-1">Complete WebSite in PHP</h1>
</header>
<div id="menu" class="container bg-dark">
<?php include('navbar.php'); ?>
</div>
<div id="image" class="container m-auto p-0">
	<img src="assets/images/banner.jpg" alt="banner" class="img-fluid" style="height:300px; width:100%; margin:0 auto; ">
</div>
<div id="content" class="container pt-3">
	<h3 class="font-weight-bolder text-center">Contact Us</h3>
	<div class="container w-50">
	<form method="post" action="#" enctype="multipart/data-type">
		<div class="m-auto p-2 w-50">
			<div class="form-group">
			<label for="name">Name:</label>
			<input type="text" name="name" placeholder="entere name" class="form-control" required>
			</div>
			<div class="form-group">
			<label for="number">Number:</label>
			<input type="text" name="number" placeholder="mobile number" class="form-control" required>
			</div>
			<div class="form-group">
			<label for="email">Email:</label>
			<input type="email" name="email" placeholder="email id" class="form-control" required>
			</div><br>
			<div class="form-group">
				Message:<textarea  cols="30%" rows="5" maxlength="130"></textarea>
			</div><br>
			<div class="form-group pt-2">
				<input type="submit" name="submit" value="Submit" class="btn btn-success">
				<input type="reset" name="reset" value="Reset" class="btn btn-warning">
			</div>
		</div>
	</form>
</div>
</div>
<footer id="footer"></footer>