<?php
//panggil file config.php untuk menghubung ke server
include('../inc/config.php');
 
//tangkap data dari form
$id = $_POST['id'];
$password = $_POST['password'];
$hakases = $_POST['hakases'];

//simpan data ke database
$query = mysql_query("update pengelola set password='$password', hakases='$hakases' where id='$id'") or die(mysql_error());
 
if ($query) {
    header('location:user.php?message=update');
}
?>