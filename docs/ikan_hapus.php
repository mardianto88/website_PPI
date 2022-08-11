<?php 
include 'koneksi.php';
$id_ikan = $_GET['id_ikan'];
mysqli_query($koneksi, "DELETE FROM ikan WHERE id_ikan='$id_ikan'")or die(mysql_error());
 
header("location:ikan_detail.php");
?>