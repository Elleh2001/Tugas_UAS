<?php
include "../config/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <meta name="generator" content="Hugo 0.88.1">
    <title>halaman Beranda</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">


    
</head>
<body>
   
    <div class="container">
        <div class="left_slide">
            <div class="imgProf">
                <img src="img/Greeg.jpg" width="60%" height="80px" style="border-radius: 50%;"/>
            </div>
        </div>
        <div class="right_slide">
            <h2>
                BAMBA_HOTEL
                <br>
                <hr noshade color="red" size="2">
            </h2>
            <p>
               <i>Jln Raya Kuta, pujut, Lombok Tengah<br> Nusa Tenggara Barat</i>
            </p>
        </div>
        <div class="kanan">
        <button><a href="../login/logout.php"> <b>LOGOUT</b></button>
        </div>
    </div>
    
    <div class="btn"></div>
        <nav class="bar">
        <div class="text">Menu</div>
            <ul><br><br>
                <li><a href="dashboard.php">Dashboard</a></li>
                <br><br>
                <ul>
                        <li><a href="profil.php">Profile Hotel</a></li>
                        <br><br>
                    <li><a href="data_pelanggan.php">Pelanggan</a></li>
                    <br><br>
                </ul>
                    <li><a href="data_transaksi.php">Info Pemesanan</a></li>
                    <br><br>
                <ul>
                    <li><a href="data_kamar.php">Kamar</a></li>
                    <br><br>
                    <li><a href="#">User</a></li>
                    <br><br>
                    <li><a href="#">Laporan</a></li>
                </ul>
                   
            </ul>
        </nav>
        <div class="konten">
        
        <div>
        <br>
        <button class="dayut">
            <a  href="tambah_pelanggan.php"><b> + Tambah Data</b></a>
        </button>
        <br>
            <table class="table1">
                    <tr>
                        <th>#</th>
                        <th>Nama Pelanggan</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Telphon</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    $no = 1;
                    $sql = mysqli_query($koneksi, "SELECT * FROM pelanggan");
                    
                    while ($rs = mysqli_fetch_array($sql)) : ?>
                        <tr>
                            <td align="center"><?= $no; ?></td>
                            <td align="center"><?= $rs['nama_pelanggan']; ?></td>
                            <td align="center"><?= $rs['jns_kelamin']; ?></td>
                            <td align="center"><?= $rs['alamat']; ?></td>
                            <td align="center"><?= $rs['no_tlp']; ?></td>
                            <td align="center"><?= $rs['email']; ?></td>
                            <td align="center">
                            <a class="btn btn-info btn-sm" href="ubah_pendaftaran.php?id=<?= $rs['id_pendaftaran']; ?>">Ubah</a> 
                            <a class="btn btn-danger btn-sm" href="hapus_pendaftaran.php?id=<?= $rs['id_pendaftaran']; ?>">Hapus</a>
                            </td>
                        </tr>
                        <?php
                        $no++;
                    endwhile;
                    ?>
            </table>
        </div>
    </div>
   
</body>
</html>