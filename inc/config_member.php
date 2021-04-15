<?php

	$host = 'localhost';
	$user = 'root';
	$pass = 'root';

	$dbname = 'membership'; 
	//mengubung ke host
	$connect = mysql_connect($host, $user, $pass) or die(mysql_error());
	 
	//memilih database yang akan digunakan
	$dbselect = mysql_select_db($dbname);

?>