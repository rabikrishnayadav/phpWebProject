<?php
include('../assets/component/db_con.php');
if (isset($_GET['delete_id'])) {

	$delete_req = $_GET['delete_id'];

	$sqlDeleteQuery = "delete from users where id='$delete_req'";

	$sql_query = mysqli_query($con,$sqlDeleteQuery);

	header('location:user_list.php'); 
}

// for delete all selected user

if (isset($_REQUEST['multi_delete'])) {
	
	$delete_req = $_GET['checked_data']; // here will come multiple id in array form

	$array_to_string = implode(',',$delete_req); // these will change from array to string

	// in whereClause 'where id in()' is used for delete multiple ids
	$sqlDeleteQuery = "delete from users where id in($array_to_string)";

	$sql_query = mysqli_query($con,$sqlDeleteQuery);

	header('location:user_list.php'); 

}