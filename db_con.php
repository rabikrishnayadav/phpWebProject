<?php

try {

	$host = 'localhost';
	$host_user = 'root';
	$host_pwd = '';
	$db = 'phpwebproject';

	$con = mysqli_connect($host,$host_user,$host_pwd,$db);
	
} catch (Exception $e) {
	echo "Error:" .$e->getMessage();
}