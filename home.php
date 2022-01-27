<?php
include('assets/component/links.php');
include('assets/component/db_con.php');
error_reporting(0);
?>
<header id="header" class="container bg-secondary text-light">
	<h1 class="text-center p-1">Complete WebSite in PHP</h1>
	<div class="row">
		<div class="col-xl-10">
		</div>
		<div class="col-xl-2">
			<a href="logout.php" class="btn btn-success">Logout</a>
		</div>
	</div>
</header>
<div id="menu" class="container bg-dark">
	<?php include('assets/component/navbar.php'); ?>
</div>
<div class="container pt-3">
	<?php include('users/user_list.php'); ?>
</div>