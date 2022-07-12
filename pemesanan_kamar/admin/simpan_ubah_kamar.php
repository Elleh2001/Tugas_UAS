<?php
// session_start();
// if ($_SESSION['status'] != "sudah_login") {
// //melakukan pengalihan
// header("location:../login/login.php");
// }
include "../config/koneksi.php";
$id  = $_POST['id_kamar'];
$code = $_POST['kode_kamar'];
$Foto = $_POST['foto'];
$Harga = $_POST['harga'];
$sql = mysqli_query($koneksi, "UPDATE kamar set
kode_kamar='$code',foto='$Foto',harga='$Harga' where id_kamar=$id");
if ($sql) {
header('location:data_kamar.php?pesan=Data Berasil Di simpan');
} else {
// header('location:data_jns_ekskul.php?pesan=Data Gagal Di simpan');
echo ('ERROR' . mysqli_error($koneksi));
}

// $update_data = mysqli_query($koneksi, "UPDATE tb_jns_ekskul set
// nama_ekskul='$nama' where id_jns_ekskul=$id");
// if ($update_data) {