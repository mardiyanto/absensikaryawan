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
<?php
$url = $_SERVER['REQUEST_URI'];
$host = $_SERVER['HTTP_HOST'];

require_once '../application/libraries/qrcode/qrlib.php'; // Ganti dengan path file qrlib.php sesuai dengan lokasi Anda
$id_karyawan = "12345"; // Ganti dengan id_karyawan yang sesuai
$filename = $id_karyawan . "code.png"; // Nama file QR Code

// Path untuk menyimpan QR Code
$imagePath = "../uploads/$filename"; // Ganti dengan path lokasi penyimpanan QR Code

// Cek apakah file gambar QR Code sudah ada
if (!file_exists($imagePath)) {
    // Tampilkan tombol "Generate QR Code"
    echo '<form action="" method="post">
            <input type="hidden" name="generate_qr" value="1">
            <button type="submit">Generate QR Code</button>
          </form>';
} else {
    // File gambar QR Code sudah ada, tampilkan gambar
    echo "<img src=\"$imagePath\" alt=\"QR Code\">";
}

// Cek apakah tombol "Generate QR Code" diklik
if (isset($_POST['generate_qr']) && $_POST['generate_qr'] == 1) {
    // Generate QR Code dan simpan sebagai file gambar
    QRcode::png($id_karyawan, $imagePath, QR_ECLEVEL_H, 10);
    echo "QR Code berhasil disimpan sebagai file $filename";
    echo "<div class='card'>
    <img src=\"$imagePath\" alt=\"QR Code\" style='width:100%'>
    <h1>BARCODE BUKU TAMU</h1>
  
    <p></p></br></br>
  
  </div>";
}
$url = $_SERVER['REQUEST_URI'];
$host = $_SERVER['HTTP_HOST'];
echo "$host"; echo "$url";


?>
