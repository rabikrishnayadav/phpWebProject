<?php
session_start();
ob_start();
include('../assets/component/db_con.php');
if (isset($_GET['submit'])) {

	$username = $_GET['username'];
	$pwd = $_GET['password'];
	
	$sqlSearchQuery = "select * from users where username='$username' ";
	
	$sql_query = mysqli_query($con,$sqlSearchQuery);

	$user_count = mysqli_num_rows($sql_query); // for finding the username
	
	if ($user_count) {

		$user_data_fetch = mysqli_fetch_assoc($sql_query);

		$db_password = $user_data_fetch['password'];  

		$_SESSION['username'] = $user_data_fetch['username']; 
	
		if ($db_password == $pwd) {	
			header('location:../home.php');
		}else{
			echo "Incorrect Password";
		}
	}else{
		echo "Incorrect Username";
	
	}
}