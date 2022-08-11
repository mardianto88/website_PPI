

 <?php
session_start();
require_once "koneksi.php";

$user =$_POST['user'];
$pwd =md5($_POST['pwd']);
$level_admin = $_POST['level_admin'];
// untuk login admin
if ($_GET['mod']=='login') {
  $Q=mysqli_query($koneksi, "select user, pwd, level_admin from admin where user='".$user."' and pwd='".$pwd."' and level_admin='PPI'");
    $r=mysqli_fetch_array($Q);
    if (mysqli_num_rows($Q)){
      $_SESSION['user'] = $r['user'];
      $_SESSION['pwd'] = $r['pwd'];
      $_SESSION['level_admin'] =$r['level_admin'];
      header('location:index.php');
  }
    // untuk login Mahasiswa

    elseif ($_GET['mod']=='login') {
    $Q=mysqli_query($koneksi, "select user, pwd, level_admin from admin where user='".$user."' and pwd='".$pwd."' and level_admin='ENUMERATOR'");
    $r=mysqli_fetch_array($Q);
    if (mysqli_num_rows($Q)){
      $_SESSION['user'] = $r['user'];
      $_SESSION['user'] = $r['user'];
      $_SESSION['level_admin'] =$r['level_admin'];
      header('location:enumerator/dasbord.php');

    }
    else{
      header('location:login.php');
      echo "Masuk Akun Gagal Coba Lagi";
    }
  }
}

?>