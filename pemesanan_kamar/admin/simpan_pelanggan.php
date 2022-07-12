<?php
// session_start();
// if ($_SESSION['status'] != "sudah_login") {
// //melakukan pengalihan
// header("location:../login/login.php");
// }
include "../config/koneksi.php";
$nama = $_POST['nama_pelanggan'];
$Alamat = $_POST['alamat'];
$kelamin = $_POST['jns_kelamin'];
$tlp = $_POST['no_tlp'];
$Gmail = $_POST['email'];
$insert_data = mysqli_query($koneksi, "INSERT INTO pelanggan 
(nama_pelanggan,alamat,jns_kelamin,no_tlp,email)
Values('$nama','$Alamat','$kelamin','$tlp','$Gmail')");

if ($insert_data) {
    header('location:data_pelanggan.php?pesan=Data Berasil Di simpan');
} else {
    // header('location:data_kamar.php?pesan=Data Gagal Di simpan');
    echo ("ERROR" . mysqli_error($koneksi));
}