
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
    <title>Data - RTP/PP</title>
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
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="../foto/2.jpg" alt="User Image" width="48" left="48"> 
        <div>
          <p class="app-sidebar__user-name">ENUMERATOR</p>
          <p class="app-sidebar__user-designation"></p>
        </div>
      </div>
      <ul class="app-menu">
      <li><a class="app-menu__item" href="dasbord.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>


        <li class="treeview is-expanded"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-print"></i><span class="app-menu__label">Laporan</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
          <li><a class="treeview-item active" href="lap_km.php"><i class="icon fa fa-circle-o"></i> Kapal Motor Yang Beroperasi</a></li>

          <li><a class="treeview-item " href="lap_ikan.php"><i class="icon fa fa-circle-o"></i> Jenis Ikan</a></li>

           <li><a class="treeview-item " href="lap_rtp.php"><i class="icon fa fa-circle-o"></i> Nama RTP PP</a></li>

              <li><a class="treeview-item " href="lap_harian.php"><i class="icon fa fa-circle-o"></i> Hasil Tangkapan Per Harian</a></li>

            <li><a class="treeview-item" href="lap_bulanan.php"><i class="icon fa fa-circle-o"></i> Hasil Tangkapan Per Bulanan</a></li>
          </ul>
        </li>
      </ul>
    </aside>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Data RTP/PP</h1>
          <p>Detail Data RTP/PP</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
             <form action="" method="post">
                <a href="../lap_rtp.php" class="btn btn-success ">Print</a>
            </form>
              <table class="table table-hover table-bordered" id="sampleTable">
                <br>
            <thead>
                <tr>
                    <th width="5%"><div align="center">ID. RTP/PP </div></th>
                    <th width="10%"><div align="center">Nama RTP/PP</div></th>
                    <th width="10%"><div align="center">Nama Kapal Motor</div></th>
                    <th width="2%"><div align="center">MT (GT)</div></th>
                    <th width="5%"><div align="center">Jenis Alat Utama</div></th>
                   
                </tr>
            </thead> 
            <tbody>
                <?php
                          include "../koneksi.php";
                             $sql = mysqli_query($koneksi, "SELECT rtp.id_rtp_pp, rtp.nama_rtp_pp, km.id_km, km.nama_km, rtp.mt, rtp.jenis_alat_utama FROM RTP inner join km on rtp.id_km=km.id_km");
                              while ($tampil = mysqli_fetch_array($sql)) {
                               ?>

                                <tr>
                                 
                                 <td align="center"><span class="style1"><?php echo $tampil['id_rtp_pp'] ?></span></td>
                                  <td ><span class="style1"><?php echo $tampil['nama_rtp_pp'] ?></span></td>
                                   </td>
                                   <td ><span class="style1"><?php echo $tampil['nama_km'] ?></span></td>
                                   </td>
                                   <td ><span class="style1"><?php echo $tampil['mt'] ?></span></td>
                                   </td>
                                   <td ><span class="style1"><?php echo $tampil['jenis_alat_utama'] ?></span></td>
                                   </td>
                                 
                                  <?php  }  ?> 
                            </table>
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
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
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