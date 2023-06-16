<?php 
session_start();
require_once '../application/libraries/qrcode/qrlib.php'; 
// Periksa apakah karyawan sudah login atau belum
if (!isset($_SESSION['id_karyawan'])) {
    header("Location: login.php");
    exit();
}
if($_GET['aksi']=='home'){
// Query untuk mengambil data karyawan
$query = "SELECT * FROM karyawan WHERE id_karyawan = '$id_karyawan'";
$result = mysqli_query($koneksi, $query);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    $kate2=mysqli_query($koneksi," SELECT * FROM karyawan,jabatan WHERE jabatan=id_jabatan AND id_karyawan='$id_karyawan'");
    $r=mysqli_fetch_array($kate2); 
// Mengambil bulan dan tahun saat ini
$bulan = date('m');
$tahun = date('Y');

// Query untuk menghitung total baris pada tabel presensi dalam satu bulan berdasarkan jam masuk
$sql = "SELECT COUNT(*) AS total FROM presensi WHERE MONTH(tgl) = '$bulan' AND YEAR(tgl) = '$tahun' AND id_karyawan='$id_karyawan' AND jam_msk IS NOT NULL";
// Menjalankan query
$result = mysqli_query($koneksi, $sql);
    // Mendapatkan hasil query
    $row = mysqli_fetch_assoc($result);
    // Menampilkan total baris
    $totalBaris = $row['total'];
// Query untuk menghitung total baris pada tabel presensi dalam satu bulan berdasarkan jam masuk
$sql1 = "SELECT COUNT(*) AS total FROM presensi WHERE MONTH(tgl) = '$bulan' AND YEAR(tgl) = '$tahun' AND id_karyawan='$id_karyawan' AND jam_klr IS NOT NULL AND jam_klr != '00:00:00'";

// Menjalankan query
$result = mysqli_query($koneksi, $sql1);

    // Mendapatkan hasil query
    $row1 = mysqli_fetch_assoc($result);

    // Menampilkan total baris
    $totalBaris1 = $row1['total'];
echo"  <div class='row'>
<div class='col-md-4'>

  <!-- Profile Image -->
  <div class='box box-primary'>
    <div class='box-body box-profile'>
      <img class='profile-user-img img-responsive img-circle' src='../assets/dist/img/user6-128x128.jpg' alt='User profile picture'>
      <h3 class='profile-username text-center'>$nama_karyawan</h3>
      <p class='text-muted text-center'>$r[nama_jabatan]</p>

      <ul class='list-group list-group-unbordered'>
        <li class='list-group-item'>
          <b>Absen jam masuk bulan ini</b> <a class='pull-right'> $totalBaris</a>
        </li>
        <li class='list-group-item'>
          <b>Absen jam pulang bulan ini</b> <a class='pull-right'>$totalBaris1</a>
        </li>

      </ul>

      <a href='index.php?aksi=absen' class='btn btn-primary btn-block'><b>CEK ABSENSI</b></a>
    </div><!-- /.box-body -->
  </div><!-- /.box -->


</div><!-- /.col -->
<div class='col-md-7'>
  <div class='nav-tabs-custom'>
    <ul class='nav nav-tabs'>
      <li class='active'><a href='#activity' data-toggle='tab'>BARCODE ABSEN</a></li>
      <li><a href='logout.php'>Logout</a></li>
    </ul>
    <div class='tab-content'>
      <div class='active tab-pane' id='activity'>
        <!-- Post -->
        <div class='post'>
          <div class='row margin-bottom'>
            <div class='col-sm-6'>";
$filename = $id_karyawan . "code.png"; // Nama file QR Code
// Path untuk menyimpan QR Code
$imagePath = "../uploads/qr_image/$filename"; // Ganti dengan path lokasi penyimpanan QR Code

// Cek apakah file gambar QR Code sudah ada
if (!file_exists($imagePath)) {
    // Tampilkan tombol "Generate QR Code"
    echo '<form action="" method="post">
            <input type="hidden" name="generate_qr" value="1">
            <button type="submit">Generate QR Code</button>
          </form>';
} else {
    // File gambar QR Code sudah ada, tampilkan gambar
    echo "<img class='img-responsive' src=\"$imagePath\" alt=\"QR Code\"><br> 
    <a href='qrcode.php?id_karyawan=$id_karyawan' target='_blank' class='btn btn-primary btn-block'><b>CETAK KARTU</b></a>
    ";
}

// Cek apakah tombol "Generate QR Code" diklik
if (isset($_POST['generate_qr']) && $_POST['generate_qr'] == 1) {
    // Generate QR Code dan simpan sebagai file gambar
    QRcode::png($id_karyawan, $imagePath, QR_ECLEVEL_H, 10);
    echo "<script type='text/javascript'>alert('QR Code berhasil disimpan sebagai file $filename');</script>";
    echo "<script>window.location=('index.php?aksi=home')</script>";
}
    

            echo"</div><!-- /.col -->

          </div><!-- /.row -->


         
      </div><!-- /.tab-pane -->
      

     
    </div><!-- /.tab-content -->
  </div><!-- /.nav-tabs-custom -->
</div><!-- /.col -->
</div><!-- /.row -->";
} else {
    echo "Data karyawan tidak ditemukan";
}
// Tombol logout

}

elseif ($_GET['aksi']=='absen'){ 
    echo"<div class='row'>
    <div class='col-lg-12'>
        <div class='panel panel-default'>
            <div class='panel-heading'>INFORMASI ABSENSI $nama_karyawan
            </div>
            <div class='panel-body'>	
                   <div class='table-responsive'>		
    <table id='example1' class='table table-bordered table-striped'>
                        <thead>
                            <tr> 
                                <th>No</th>
                                <th>Tgl</th>	 
                                 <th>Jam Masuk</th>	
                                 <th>Jam Keluar</th>	
                            </tr>
                        </thead><tbody>
        ";
    
    $no=0;
    $sql=mysqli_query($koneksi," SELECT * FROM presensi WHERE id_karyawan='$id_karyawan' ORDER BY id_absen ASC");
    while ($t=mysqli_fetch_array($sql)){	
    $no++;
                        echo"
                            <tr><td>$no</td>
                                <td>$t[tgl]</td> 
                                 <td>$t[jam_msk]</td>
                                 <td>$t[jam_klr]</td>
                            </tr>";
    }
                    echo"
                        </tbody></table>
                </div>
            </div>
        </div>
    </div>
    </div>";
 
  
} ?>