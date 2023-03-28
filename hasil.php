<?php
include 'config.php';
include 'prosesdaftar.php';
include 'proses.php';


$result = mysqli_query($conn,'SELECT * FROM tb_datapasien ORDER BY id_pasien DESC LIMIT 1') or die('Invalid query: ' . mysql_error());

//print values to screen
while ($row = mysqli_fetch_assoc($result)) {
$id_pasien =$row['id_pasien'];
 $nama_user= $row['nama_user'];
  $alamat_user= $row['alamat_user'];
  $umur_user =$row ['umur_user'];
  
  $run = mysqli_query($conn,"INSERT INTO tb_hasil(id_pasien,kode_penyakit) VALUES ('$id_pasien','$kode_penyakit')");
}



      
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width-device-width, intial-scale=1.0">

<title>Sistem Pakar Diagnosa Penyakit Gigi dan Mulut Manusia </title>

<link rel="stylesheet" href="style1.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Product Sans:wght@200;300;400;500;600&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="header">
	<div class="container">
	<div class="navbar">
	
	<nav>
		<ul id="MenuItems">
		<li><a href="index.php">Beranda</a></li>
		<li><a href="daftarpenyakit.php">Daftar Penyakit</a></li>
		<li><a href="konsultasi.php">Konsultasi</a></li>
		<li><a href="tentang.php">Tentang</a></li>
		
		</ul>
	</nav>	
	<br></br>
	<a href="admin/login.php" class="split"><img src="admins.png" width="20px" height="20px"></a>
	</div>
</div>
</div>

<div class="row">
	<div class="col-1">
	<h1>Konsultasi</h1>

	<br>

	<br>

</div>
</div>

<div class="offer">
	<div class="small-container">
	<div class="row-3">
	<div class="col-3">	
</div>
                            
                                 
	<div class="col-3">
	<h1>Hasil Diagnosa</h1>
	<p>Berikut adalah hasil diagnosa berdasarkan aturan sistem pakar dan pilihan gejala dari pasien.</p>
	<br><br>
	<h3> Nama Pasien : 
                    <?php

                   echo $nama_user ;

                    ?> </h3>

                    <h3> Umur : <?php echo $umur_user; ?>
                  </h3>
                    <h3> Alamat : <?php echo $alamat_user; ?>
                  </h3>
<br><br>
	<h2>Kode Penyakit</h2>
	<hr>
	<br>
	<p> <?php echo $kode_penyakit ?> </p>
	<br>
	<hr>
	<br><br>

	<h2>Nama Penyakit</h2>
	<hr>
	<br>
	<p><?php echo $nama_penyakit ?></p>
	<br>
	<hr>
	<br><br>

	<h2>Penyebab</h2>
	<hr>
	<br>
	<p><?php echo $penyebab ?></p>
	<br>
	<hr>
	<br><br>

	<h2>Saran</h2>
	<hr>
	<br>
	<p><?php echo $saran ?></p>
	<br>
	<hr>
	<br><br>
<a href="konsultasi.php" class="btn">Ulangi Konsultasi </a>
<a href="index.php" class="btn">Kembali Ke Beranda </a>

</div>
</div>
</div>
</div>

<div class="footer">
	<div class="container">
	
	<div class="footer-col-1">
		<br></br>
		<h3>Website by Dinda Dwi Laras</h3>
		<p>All rights reserved.</p>
		
		</div>
		</div>


</body>