<?php

$user_name = "root";
$password = "";
$database = "restoran";
$host_name = "localhost";

mysql_connect($host_name,$user_name,$password);
mysql_select_db($database);
if($find_db){
	echo "Database Ada";
	}else{
	echo"Database Tidak Ada";
	}

?>