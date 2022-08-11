<?php 

include "koneksi.php";
//$action = strtolower($_POST['no_p']);
if (isset($_POST['ubah_data'])) {
 	$id_rtp_pp  = $_POST['id_rtp_pp'];
    $nama_rtp_pp = $_POST['nama_rtp_pp'];
    $id_km  =$_POST['id_km'];
    $mt = $_POST['mt'];
    $jenis_alat_utama = $_POST['jenis_alat_utama'];
   
 $update = mysqli_query($koneksi, "UPDATE rtp SET id_rtp_pp='$id_rtp_pp', nama_rtp_pp='$nama_rtp_pp', id_km='$id_km', mt='$mt', jenis_alat_utama='$jenis_alat_utama' WHERE id_rtp_pp='$id_rtp_pp'") or die(mysql_error());
 if ($update) {
    header('location: rtp_detail.php');
 } else {
    header('location: rtp_detail.php');
 }
} 

?>
