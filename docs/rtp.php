
  <?php
  session_start();
 if (empty($_SESSION['user']) AND empty($_SESSION['pwd'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
  <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=login.php><b>LOGIN</b></a></center>";
}
else { 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Form Input RTP/PP</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->

       
     <?php
                  include "koneksi.php";
                  if (isset($_POST['simpandatax'])) {
                      $id_rtp_pp  = $_POST['id_rtp_pp'];
                      $nama_rtp_pp = $_POST['nama_rtp_pp'];
                      $id_km  =$_POST['id_km'];
                      $mt = $_POST['mt'];
                      $jenis_alat_utama = $_POST['jenis_alat_utama'];
                   
                      
                      $x ="INSERT INTO rtp(id_rtp_pp, nama_rtp_pp, id_km, mt, jenis_alat_utama) VALUES ('$id_rtp_pp', '$nama_rtp_pp','$id_km','$mt','$jenis_alat_utama')";
                      $y = mysqli_query($koneksi, $x);
                      if ($y) {
                         // echo "<script>alert('data berhasil disimpan')</script>";
                            header('location:rtp_detail.php');
                      } else {
                          //echo "<script>alert('data gagal disimpan')</script>";
                            header('location: rtp.php');
                      }
                  }
              ?>

    <header class="app-header"><a class="app-header__logo" href="index.html">Dinas Perikanan</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        
        <!--Notification Menu-->
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Keluar</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="foto/1.jpg" alt="User Image" width="48" left="48"> 
        <div>
          <p class="app-sidebar__user-name">Admin PPI</p>
          <p class="app-sidebar__user-designation"></p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="index.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
       
        <li class="treeview is-expanded"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Input Data PPI</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item " href="km.php"><i class="icon fa fa-circle-o"></i> Input Kapal Motor</a></li>
            <li><a class="treeview-item active" href="rtp.php"><i class="icon fa fa-circle-o"></i> Input Nama RTP/PP </a></li>
            <li><a class="treeview-item" href="ikan.php"><i class="icon fa fa-circle-o"></i> Input Jenis Ikan</a></li>
             <li><a class="treeview-item" href="hasil.php"><i class="icon fa fa-circle-o"></i> Input Hasil Tangkap</a></li>
          </ul>
        </li> 
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Detail Data PPI</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
           <li><a class="treeview-item " href="km_detail.php"><i class="icon fa fa-circle-o"></i> Detail Kapal Motor</a></li>
            <li><a class="treeview-item " href="rtp_detail.php"><i class="icon fa fa-circle-o"></i> Detail Nama RTP/PP</a></li>
            <li><a class="treeview-item" href="ikan_detail.php"><i class="icon fa fa-circle-o"></i> Detail Jenis Ikan</a></li>
             <li><a class="treeview-item" href="hasil_detail.php"><i class="icon fa fa-circle-o"></i> Detail Hasil Tangkap</a></li>
          </ul>
        </li> 

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-print"></i><span class="app-menu__label">Laporan</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="lap_harian.php"><i class="icon fa fa-circle-o"></i> Laporan Harian</a></li>
            <li><a class="treeview-item" href="lap_bulanan.php"><i class="icon fa fa-circle-o"></i> Laporan Bulanan</a></li>
           
          </ul>
        </li>
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Form Input Data RTP/PP</h1>
          <p>Input Data RTP/PP</p>
        </div>
      </div>
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">

    

              <form  action="" method="post" class="form-horizontal">
                <div class="form-group row">
                  <label class="control-label col-md-3">ID RTP/PP</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" name="id_rtp_pp" type="text" placeholder="ID. RTP/PP">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Nama RTP/PP</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" placeholder="Nama RTP/PP" name="nama_rtp_pp">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="control-label col-md-3">Nama Kapal Motor</label>
                  <div class="col-md-8">
                   <select name="id_km" required="true" class="form-control">
                          <option>--Pilih Nama KM--</option>
                          <?php
                            include '../../koneksi.php';
                              $query =mysqli_query($koneksi,"select * from km order by nama_km ");
                              while($hasil=mysqli_fetch_array($query)){
                                print ("<option value=$hasil[id_km]>$hasil[Kuwartir_ranting]</option>");
                                } ?>
                        </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="control-label col-md-3">MT (MG)</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="mt" placeholder="MT (MG)">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Jenis Alat Utama</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" placeholder="Jenis Alat Utama" name="jenis_alat_utama">
                  </div>
                </div>

            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <button name="simpandatax" onclick="return confirm('Yakin Simpan Data')" class="btn btn-outline-danger">SIMPAN</button>
                  <button type="reset" name="reset" class="btn btn-outline-secondary">BATAL</button>
                </div>
              </div>
            </div>
          </div>
        
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
    </form>
</html>
<?php }  ?>