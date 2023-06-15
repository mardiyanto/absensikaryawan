<?php 
  session_start();
  include 'koneksi.php';

// Periksa apakah karyawan sudah login atau belum
if (!isset($_SESSION['id_karyawan'])) {
    header("Location: login.php");
    exit();
}
// Ambil informasi karyawan dari session
$id_karyawan = $_SESSION['id_karyawan'];
$nama_karyawan = $_SESSION['nama_karyawan'];
$jabatan = $_SESSION['jabatan'];
$filename = $id_karyawan . "code.png";
  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Top Navigation</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/plugins/bootstrap/css/custom-button.min.css">
<link rel="stylesheet" href="../assets/plugins/font-awesome-4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/plugins/ionicons-2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="../assets/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">

      <header class="main-header">
        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <a href="index.php?aksi=home" class="navbar-brand"><b>beranda</b></a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
              <ul class="nav navbar-nav">
                <li ><a href="index.php?aksi=absen">Lihat Absensi </a></li>
                <li><a href="logout.php">Logout</a></li>
                
              </ul>
              
            </div><!-- /.navbar-collapse -->
            <!-- Navbar Right Menu -->
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                  <!-- User Account Menu -->
                  <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <!-- The user image in the navbar-->
                      <img src="../assets/dist/img/user4-160x160.jpg" class="user-image" alt="User Image">
                      <!-- hidden-xs hides the username on small devices so only the image appears. -->
                      <span class="hidden-xs"><?php echo" $nama_karyawan"; ?></span>
                    </a>
                    
                  </li>
                </ul>
              </div><!-- /.navbar-custom-menu -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container">

          <!-- Main content -->
          <section class="content">
            <?php include"proses.php"; ?>
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="container">
          <div class="pull-right hidden-xs">
            <b>Version</b> 2.3.0
          </div>
          <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
        </div><!-- /.container -->
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../assets/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../assets/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../assets/dist/js/demo.js"></script>
  </body>
</html>
 