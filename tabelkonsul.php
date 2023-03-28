<?php

include 'config.php';
include 'prosesdaftar.php';
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
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

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
<div class="col-2">


<div class="container-fluid">

                    <!-- Page Heading -->
                   

                    <!-- Content Row -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pilih Gejala</h1>
                        

                        </div>
                         <h2>Pilih Gejala yang anda alami</h2>
                  <br>
                  <br>
       
                  <h3> Nama Pasien : 
                    <?php

                   echo $nama_user ;

                    ?> </h3>

                    <h3> Umur : <?php echo $umur_user; ?>
                  </h3>
                    <h3> Alamat : <?php echo $alamat_user; ?>
                  </h3>

                  <br><br>

              <div class="container">
               <form class="col-6" action="proses.php" method="POST">

                        <table id="tbgejala">
                            <thead>
                          <tr>
                            <th>Kode Gejala</th>
                             <th>Nama Gejala</th>
                              <th>Aksi</th>
                          </tr>
                          </thead>
                        <tbody> 
                          
                        <?php
                          include 'config.php';
                          $gejala = mysqli_query($conn,"SELECT * FROM tb_gejala ORDER BY kode_gejala");
                          while($row = mysqli_fetch_array($gejala)) 
                          {
                                $kode_gejala = $row['kode_gejala'];
                                $nama_gejala = $row['nama_gejala'];
                                $id = $row['id'];
                                 
                                 ?>
                            
                                  <tr>
                                    <td><?php echo $kode_gejala ?></td>

                                    <td><?php echo $nama_gejala ?></td>
                                
                                    

                                    <td> 
                                       
                                        
                                        <input type="checkbox" aria-label="Checkbox for following text input" value="<?=$row['kode_gejala']?>" name="<?=$row['id']?>">
                                      

                                    </td>
                                     </tr> 
                                     <?php
                         }
                            ?>
                        
            
 
<script>
    $(document).ready(function () {
    $('#tbgejala').DataTable();
});
</script>
                 

</tbody>
</table>
 <input type="submit" name="submit" value="Konfirmasi" class="btn">
</form>


<div class="footer">
<div class="container">
<div class="footer-col-1">
    <br></br>
    <h3>Website by Dinda Dwi Laras</h3>
    <p>All rights reserved.</p>
    
</div>
</div>

</body>