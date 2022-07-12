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
            <a  href="tambah_kamar.php"><b> + Tambah Data</b></a>
        </button>
        <br>
            <table class="table1">
                    <tr>
                        <th>#</th>
                        <th>Code Kamar</th>
                        <th>Foto</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    $no = 1;
                    $sql = mysqli_query($koneksi, "SELECT * FROM kamar");
                    
                    while ($rs = mysqli_fetch_array($sql)) : ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $rs['kode_kamar']; ?></td>
                            <td><?= $rs['foto']; ?></td>
                            <td><?= $rs['harga']; ?></td>
                            <td>
                            <a href="ubah_data_kamar.php?id=<?= $rs['id_kamar']; ?>">Ubah</a>
                            <a class="Anisa" href="hapus_kamar.php?id=<?= $rs['id_kamar']; ?>">Hapus</a>
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
