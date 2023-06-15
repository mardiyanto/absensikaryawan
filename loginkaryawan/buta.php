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
    <link rel="stylesheet" href="../assets/plugins/font-awesome-4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/plugins/ionicons-2.0.1/css/ionicons.min.css">
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
<body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Buku Tamu
            </h1>

          </section>

          <!-- Main content -->
          <section class="content">
           
            <div class="box box-default">
            <div class="box-header with-border">
                  <h3 class="box-title">ISISKAN BUKU TAMU DENGAN LENGKAP</h3>
                </div><!-- /.box-header -->
              <div class="box-body">
              <div class="box box-primary">
           
                <!-- form start -->
                <form action="proses-tamu.php?aksi=input" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" name="email_tamu" id="exampleInputEmail1" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Nama</label>
                      <input type="text" class="form-control" name="nama_tamu" id="exampleInputPassword1" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">No hp/Wa</label>
                      <input type="text" class="form-control" name="no_hp" id="exampleInputPassword1" placeholder="No HP/WA" required>
                    </div>
                    <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control select2" style="width: 100%;" name="jk">
                      <option selected="selected">Pilih Jenis Kelmain</option>
                      <option>Laki-Laki</option>
                      <option>Perempuan</option>
                    </select>
                  </div><!-- /.form-group -->
                    <div class="form-group">
                      <label for="exampleInputPassword1">Asal Instansi</label>
                      <input type="text" name='instansi' class="form-control" id="exampleInputPassword1" placeholder="Enter ..." required>
                    </div>
                  
                  <div class="form-group">
                      <label for="exampleInputPassword1">Alamat Lengkap</label>
                      <input type="text" name='alamat' class="form-control" id="exampleInputPassword1" placeholder="Enter ..." required>
                    </div>
            
                  <div class="form-group">
                      <label for="exampleInputPassword1">Keperluan</label>
                      <input type="text" name='keperluan' class="form-control" id="exampleInputPassword1" placeholder="Enter ..." required>
                    </div>
        
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                  </div>
                </form>
              </div><!-- /.box -->

              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->

    </div><!-- ./wrapper -->

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
