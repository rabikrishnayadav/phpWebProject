<?php
include('../assets/component/db_con.php');

if (isset($_REQUEST['submit'])) {

	// store the user data on variable
	$username = $_REQUEST['username'];
	$pwd = $_REQUEST['password'];
	$address = $_REQUEST['address'];
	$gender = $_REQUEST['gender'];
	$education = $_REQUEST['education'];
	$country = $_REQUEST['country'];
	// checkbox data will come in array for so convert it into string for storing in database
	$con_arr_to_str  = implode(',', $education);

	// data insert into databse
	$sqlInsertQuery = "insert into users(username,password,address,gender,education,country) values('$username','$pwd','$address','$gender','$con_arr_to_str','$country')";

	$sql_query = mysqli_query($con,$sqlInsertQuery);
}

