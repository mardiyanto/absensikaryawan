<?php 
session_start();
  include 'koneksi.php';
// Proses login
if (isset($_POST['submit'])) {
    $id_karyawan = $_POST['id_karyawan'];

    // Query untuk memeriksa karyawan berdasarkan ID karyawan
    $query = "SELECT * FROM karyawan WHERE id_karyawan = '$id_karyawan'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
            // Login berhasil
            $_SESSION['id_karyawan'] = $row['id_karyawan'];
            $_SESSION['nama_karyawan'] = $row['nama_karyawan'];
            $_SESSION['jabatan'] = $row['jabatan'];
            $_SESSION['no_hp'] = $row['no_hp'];

            // Redirect ke halaman dashboard atau halaman lain yang diinginkan
            echo "<script type='text/javascript'>alert('login berhasil');</script>";
            echo "<script>window.location=('index.php?aksi=home')</script>"; 
            exit();
 
    } else {
        // ID karyawan tidak ditemukan
        $error = "ID Karyawan tidak ditemukan";
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Registration Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../assets/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href=""><b>Admin</b>LTE</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
      <?php if (isset($error)) { ?>
        <p class="login-box-msg"><?php echo $error; ?></p>
    <?php } ?>
        <form method="POST" action=""> 
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="id_karyawan" placeholder="kode kariawan">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>


            <div class="col-xs-4">
              <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col --></br></br>
          </div>
        </form>
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
    <!-- jQuery 2.1.4 -->
    <script src="../assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="../assets/plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
