<?php
include('../assets/component/db_con.php');
if (isset($_GET['delete_id'])) {

	$delete_req = $_GET['delete_id'];

	$sqlDeleteQuery = "delete from users where id='$delete_req'";

	$sql_query = mysqli_query($con,$sqlDeleteQuery);

	header('location:user_list.php');

}