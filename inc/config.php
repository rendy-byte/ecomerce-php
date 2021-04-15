<?php

	$host = 'localhost';
	$user = 'root';
	$pass = '';

	$dbname = 'slosquare_ecommerce'; 
	//mengubung ke host
	$connect = mysql_connect($host, $user, $pass) or die(mysql_error());
	 
	//memilih database yang akan digunakan
	$dbselect = mysql_select_db($dbname);

?>