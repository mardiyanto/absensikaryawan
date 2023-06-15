<?php
 include 'koneksi.php';
if($_GET['aksi']=='input'){
  mysqli_query($koneksi,"insert into bukutamu (nama_tamu,email_tamu,jk,alamat,instansi,no_hp,keperluan) 
  values ('$_POST[nama_tamu]','$_POST[email_tamu]','$_POST[jk]','$_POST[alamat]','$_POST[instansi]','$_POST[no_hp]','$_POST[keperluan]')");  
  echo "<script type='text/javascript'>alert('data berhasil input');</script>";
  echo "<script>window.location=('buta.php')</script>";   
} ?>