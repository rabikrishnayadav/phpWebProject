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

	// file data will come in array form with carry many information so we can collect every array data on different variable for make some validation

	$file = $_FILES['photo']; // here will come file every data in array form

	$fileName = $_FILES['photo']['name'];			// here will come only file name
	$fileType = $_FILES['photo']['type'];			// here will come only file type
	$fileTmpName = $_FILES['photo']['tmp_name'];	// here will come only file temporary name
	$fileError = $_FILES['photo']['error'];			// here will come only file Error
	$fileSize = $_FILES['photo']['size'];			// here will come only file Size

	// file upload directory name
	$filePathName = '../assets/images/users/'.$fileName;

	// sql query for upload file on dir.
	$sqlFileUploadDir = move_uploaded_file($fileTmpName, $filePathName);

	// data insert into databse
	$sqlInsertQuery = "insert into users(username,password,address,gender,education,country) values('$username','$pwd','$address','$gender','$con_arr_to_str','$country')";

	$sql_query = mysqli_query($con,$sqlInsertQuery);
}

