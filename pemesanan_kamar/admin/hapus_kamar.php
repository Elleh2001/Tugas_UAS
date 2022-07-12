<?php
include_once "../config/koneksi.php";
$id = $_GET['id'];
$hapus = mysqli_query($koneksi, "DELETE FROM kamar WHERE id_kamar='$id'");
if($hapus) {
    // echo "<script> alert('Data Berhasil Dihapus');
    // window.location.href='data_pendaftaran.php'</script>";
    header('location:data_kamar.php?pesan=Data Berhasil Di Hapus');
}else{
    // echo "<script> alert('Data Gagal Dihapus');
    // window.location.href='data_pendaftaran.php'</script>";
    header('location:data_kamar.php?pesan=Data Gagal Di Hapus');
}