
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
    <title>Welcome- PPI Kab. Kolaka</title>
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
       
        <li class="treeview "><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Input Data PPI</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item " href="km.php"><i class="icon fa fa-circle-o"></i> Input Kapal Motor</a></li>
            <li><a class="treeview-item" href="rtp.php"><i class="icon fa fa-circle-o"></i> Input Nama RTP/PP </a></li>
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
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
          <p>Menu utama aplikasi pelelangan ikan dinas perikanan kabupaten kolaka PPI manggolo</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
                <?php
                 include "koneksi.php";
                 $sql = mysqli_query($koneksi, "SELECT count(user) as users FROM admin");
                 while ($tampil = mysqli_fetch_array($sql)) {
                  ?>
              <h4>Users</h4>
              <p><b><?php echo $tampil['users'];?> </p>
                <?php } ?> </b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class="icon fa fa-ship fa-3x"></i>
            <div class="info">
            <?php
                 include "koneksi.php";
                 $sql = mysqli_query($koneksi, "SELECT count(id_km) as kapal_motor FROM km");
                 while ($tampil = mysqli_fetch_array($sql)) {
                  ?>
              <h4>Kapal Motor</h4>
              <p><b><?php echo $tampil['kapal_motor'];?> </p>
                <?php } ?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-bitbucket fa-3x"></i>
            <div class="info">
            <?php
                 include "koneksi.php";
                 $sql = mysqli_query($koneksi, "SELECT count(id_ikan) as jenis_ikan FROM ikan");
                 while ($tampil = mysqli_fetch_array($sql)) {
                  ?>
              <h4>Jenis Ikan</h4>
              <p><b><?php echo $tampil['jenis_ikan'];?> </p>
                <?php } ?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-wrench fa-3x"></i>
            <div class="info">
            <?php
                 include "koneksi.php";
                 $sql = mysqli_query($koneksi, "SELECT count(id_rtp_pp) as jumlah_rtp FROM rtp");
                 while ($tampil = mysqli_fetch_array($sql)) {
                  ?>
              <h4>Jumlah RTP/PP</h4>
              <p><b><?php echo $tampil['jumlah_rtp'];?> </p>
                <?php } ?></b></p>
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
    <script type="text/javascript" src="js/plugins/chart.js"></script>
    <script type="text/javascript">
      var data = {
      	labels: ["January", "February", "March", "April", "May"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [65, 59, 80, 81, 56]
      		},
      		{
      			label: "My Second dataset",
      			fillColor: "rgba(151,187,205,0.2)",
      			strokeColor: "rgba(151,187,205,1)",
      			pointColor: "rgba(151,187,205,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(151,187,205,1)",
      			data: [28, 48, 40, 19, 86]
      		}
      	]
      };
      var pdata = [
      	{
      		value: 300,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Complete"
      	},
      	{
      		value: 50,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "In-Progress"
      	}
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
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
</html>

<?php } ?>