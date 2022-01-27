<?php
include('../assets/component/db_con.php');

	$randPwd = rand(1000,5);

	$uniq = uniqid();
	echo $randPwd.'<br>';
	echo $uniq;

	$username = $uniq;
	
	$pwd = $randPwd;

	$address = uniqid('jnk');
	
	$gender = 'male';
	
	$education = 'html';
	
	$country = 'nepal';

	$sqlInsertQuery = "insert into users(username,password,address,gender,education,country) values('$username','$pwd','$address','$gender','$education','$country')";

	$sql_query = mysqli_query($con,$sqlInsertQuery);