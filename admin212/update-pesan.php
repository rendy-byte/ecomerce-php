<?php
//panggil file config.php untuk menghubung ke server
include('../inc/config.php');
 
//tangkap data dari form
$id = $_POST['id'];
$status = $_POST['status'];

//simpan data ke database
$query = mysql_query("update pesan set status='$status' where id_pesan='$id'") or die(mysql_error());
 
if ($query) {
    header('location:pesan.php?message=update');
}
?>