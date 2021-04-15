<?php
//panggil file config.php untuk menghubung ke server
include('../inc/config.php');
 
//tangkap data dari form
$id = $_POST['id'];
$tenant = $_POST['tenant'];
$kavling = $_POST['kavling'];
$lantai = $_POST['lantai'];
$penanggungjawab = $_POST['penanggungjawab'];
$wa = $_POST['wa'];

//simpan data ke database
$query = mysql_query("INSERT INTO tbtenant VALUES('$id', '$tenant', '$kavling', '$lantai', '$penanggungjawab','$wa')") or die(mysql_error());
 
if ($query) {
    header('location:tenant.php?message=success');
}
?>