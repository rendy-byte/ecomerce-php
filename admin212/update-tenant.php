<?php
//panggil file config.php untuk menghubung ke server
include('../inc/config.php');
 
//tangkap data dari form
$id = $_POST['id'];
$wa = $_POST['wa'];

//simpan data ke database
$query = mysql_query("update tbtenant set wa='$wa' where id='$id'") or die(mysql_error());
 
if ($query) {
    header('location:tenant.php?message=update');
}
?>