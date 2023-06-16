<?php 
  session_start();
  include 'koneksi.php';

// Periksa apakah karyawan sudah login atau belum
if (!isset($_SESSION['id_karyawan'])) {
    header("Location: login.php");
    exit();
} 
$id_karyawan = $_SESSION['id_karyawan'];
$nama_karyawan = $_SESSION['nama_karyawan'];
$jabatan = $_SESSION['jabatan'];

?>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 700px;
  margin: auto;
  text-align: center;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
<?php $kate2=mysqli_query($koneksi," SELECT * FROM karyawan,jabatan,shift WHERE karyawan.id_shift=shift.id_shift AND karyawan.jabatan=jabatan.id_jabatan AND karyawan.id_karyawan='$id_karyawan'");
    $r=mysqli_fetch_array($kate2); ?>
<div class="card">
  <img src="../uploads/qrcode_12345.png" alt="John" style="width:100%">
  <h1><?php echo"$nama_karyawan"; ?></h1>
  <p class="title"><?php echo "$r[nama_jabatan]"; ?></p>
  <p>shift :<?php echo "$r[nama_shift]"; ?> Jam :<?php echo "$r[jam_shift]"; ?></p></br></br>

</div>

