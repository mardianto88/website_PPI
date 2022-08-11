<?php 
include 'koneksi.php';
$id_km = $_GET['id_km'];
mysqli_query($koneksi, "DELETE FROM km WHERE id_km='$id_km'")or die(mysql_error());
 
header("location:km_detail.php");
?>