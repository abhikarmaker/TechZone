<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'databaseresponsive';
if($con= mysqli_connect($db_host,$db_user,$db_pass,$db_name)){	
	$connect= "connected to the database.<br/>";
	if($database = mysqli_select_db($con,$db_name)){
		$connect= "Database has been selected.<br/>";
	} else {
		echo "Database was not found.<br/>";
	}
}else{
	echo "Unbale to connect MySQL Server.<br/>";	
	}
?>