<?php 
include 'koneksi.php';
$id_rtp_pp = $_GET['id_rtp_pp'];
mysqli_query($koneksi, "DELETE FROM rtp WHERE id_rtp_pp='$id_rtp_pp'")or die(mysql_error());
 
header("location:rtp_detail.php");
?>