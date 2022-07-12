<?php
// session_start();
// if ($_SESSION['status'] != "sudah_login") {
// //melakukan pengalihan
// header("location:../login/login.php");
// }
include "../config/koneksi.php";
$nama = $_POST['kode_kamar'];
$Foto = $_POST['foto'];
$harga = $_POST['harga'];

$insert_data = mysqli_query($koneksi, "INSERT INTO kamar 
(kode_kamar,foto,harga)
Values('$nama','$Foto','$harga')");

if ($insert_data) {
    header('location:data_kamar.php?pesan=Data Berasil Di simpan');
} else {
    header('location:data_kamar.php?pesan=Data Gagal Di simpan');
}