<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman Beranda</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
</head>
<body>
   
    <div class="container">
        <div class="left_slide">
            <div class="imgProf">
                <img src="img/javas.png" width="60%" height="80px" style="border-radius: 50%;"/>
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
            <div class="class">
               <h1>Selamat Datang</h1>
               <br>
               <hr noshade color="blue" size="3">
               <div class="data">
                   <img src="img/camera.jpg" width="15%" height="30%"/>
                   <h2 align="center"><b> Gallery </b></h2>
                   <br><br>
                   <hr noshade color="black" size="5">
                   <p align="right">
                   <a href="kamar.php">Lihat_kamar</a>
                   </p>
                </div>
                <div class="data_kanan">
                <img src="img/camera.jpg" width="15%" height="30%"/>
                   <h2 align="center"><b> Manajer </b></h2>
                   <br><br>
                   <hr noshade color="black" size="5">
                   <p align="right">
                   <a href="kamar.php">Lihat_Detail</a>
                   </p>
                </div> 
                </div>
            </div>
        </div>
    </body>
</html>