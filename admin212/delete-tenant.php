<?php

include('../inc/config.php');
include('cek-login.php');

$id = $_GET['id'];
 
$query = mysql_query("delete from tbtenant where id='$id'") or die(mysql_error());
 
if ($query) {
    header('location:tenant.php?message=delete');
}
?>