<?php
//panggil file config.php untuk menghubung ke server
include('../inc/config.php');
 
//tangkap data dari form
$firstname = $_POST['firstname'];
$username = $_POST['username'];
$password = $_POST['password'];
$hakases = $_POST['hakases'];

//simpan data ke database
$query = mysql_query("INSERT INTO pengelola VALUES('', '$firstname', '$username', '$password', '$hakases')") or die(mysql_error());
 
if ($query) {
    header('location:user.php?message=success');
}
?>