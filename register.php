<?php include('links.php'); ?>
<div class="container w-50">
	<form method="post" action="#" enctype="multipart/data-type">
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
			<input type="radio" name="gender">Male &nbsp;&nbsp;
			<input type="radio" name="gender">Feale &nbsp;&nbsp;
			<input type="radio" name="gender">Other &nbsp;&nbsp;
			</div>
			<div class="form-group">
				Education: &nbsp;
				<input type="checkbox" name="html">HTML &nbsp;
				<input type="checkbox" name="html">CSS &nbsp;
				<input type="checkbox" name="html">JAVASCRIPT &nbsp;
				<input type="checkbox" name="html">PHP &nbsp;
			</div>
			<div class="form-group">
				Country:&nbsp;
				<select>
					<option>Nepal</option>
					<option>India</option>
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