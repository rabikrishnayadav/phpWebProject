<?php
include('../assets/component/db_con.php');

if (isset($_REQUEST['submit'])) {

	// store the user data on variable
	$username = $_REQUEST['username'];
	$pwd = $_REQUEST['password'];
	$address = $_REQUEST['address'];
	$gender = $_REQUEST['gender'];

	// data insert into databse

	$sqlInsertQuery = "insert into users(username,password,address,gender) values('$username','$pwd','$address','$gender')";

	$sql_query = mysqli_query($con,$sqlInsertQuery);
}

