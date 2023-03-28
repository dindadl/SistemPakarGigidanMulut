<?php

include '../config.php';

$error ="";
$sukses ="";

 $id = $_GET['editid'];
 $sql1= "SELECT * FROM tb_pengetahuan WHERE id_pengetahuan= $id";
 $result = mysqli_query($conn,$sql1);
 $row = mysqli_fetch_array($result);
 $kode_gejala = $row['kode_gejala'];
 $kode_penyakit = $row['kode_penyakit'];


if(isset($_POST['updatebasis'])){
   
  $kode_gejala = $_POST['kode_gejala'];
  $kode_penyakit = $_POST['kode_penyakit'];

  $sql = "UPDATE tb_pengetahuan SET id_pengetahuan = $id,kode_gejala = '$kode_gejala' ,kode_penyakit = '$kode_penyakit' WHERE id_pengetahuan = $id ";
  $q1 = mysqli_query($conn,$sql);

 if($q1){
        $sukses ="Data berhasil diupdate.";
        echo"<meta http-equiv=refresh content=1;URL='admbasis.php'>";
        

      }else{
        $error = mysqli_error($conn);
      } 
    
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
  <link rel="stylesheet" href="admincs.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Product Sans:wght@200;300;400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

    
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Sistem Pakar Gigi dan Mulut</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard Admin</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Sistem Pakar
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="admdaftarpenyakit.php">
                    <span>Daftar Penyakit</span>
                </a>
                
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="admgejala.php" >
                    
                    <span>Gejala Penyakit</span>
                </a>

            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="admbasis.php" >
                   
                    <span>Basis Pengetahuan</span>
                </a>

            </li>

<li class="nav-item">
                <a class="nav-link collapsed" href="admhasil.php" >
                   
                    <span>Hasil Konsultasi</span>
                </a>

            </li>

        <li class="nav-item">
                <a class="nav-link collapsed" href="admrule.php" >
                    
                    <span>Aturan</span>
                </a>

            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="admtentang.php" >
                    
                    <span>Tentang</span>
                </a>

            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="admadmin.php">
                    
                    <span>Admin</span>
                </a>

            </li>

 <li class="nav-item">
                <a class="nav-link collapsed" href="admpasien.php">
                    
                    <span>Data Pasien</span>
                </a>

            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                
                
            </li>

            <!-- Nav Item - Charts -->
           

            <!-- Nav Item - Tables -->
            

            <!-- Divider -->
           
            <!-- Sidebar Toggler (Sidebar) -->
            

            <!-- Sidebar Message -->
          
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                   

                    <!-- Topbar Search -->
                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                           
                            <!-- Dropdown - Alerts -->
                           
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            
                           
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="../index.php" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick ="return confirmLogout();">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Logout</span>
                                <img src="logout.png" width="20px" height="20px">
                            </a>
                            <!-- Dropdown - User Information -->
                           
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    

                    <!-- Content Row -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Update Pengetahuan</h1>
                        </div>
<div class="form-group">
<div class="card-body">
    <?php 
    if($error){
        ?>
        <div class ="alert alert-danger" role="alert"> <?php echo $error ?> </div>
   <?php
    }

    ?>
    <?php 
    if($sukses){
        ?>
        <div class ="alert alert-success" role="alert"> <?php echo $sukses ?> </div>
   <?php
    }

    ?>

<form action="" method="POST">
    <label>Kode Gejala</label>
    <br>

<input type="text" class="form-control form-control-user" value= <?php echo $kode_gejala;?> disabled>
 <br>

<select name="kode_gejala">
<option value="">--Pilih--</option>   
<option value="G001">G001</option>   
<option value="G002">G002</option>   
<option value="G003">G003</option>   
<option value="G004">G004</option>   
<option value="G005">G005</option>      
<option value="G006">G006</option>   
<option value="G007">G007</option>   
<option value="G008">G008</option> 
<option value="G009">G009</option>
<option value="G010">G010</option>  
<option value="G011">G011</option>   
<option value="G012">G012</option>   
<option value="G013">G013</option>   
<option value="G014">G014</option>   
<option value="G015">G015</option>   
<option value="G016">G016</option>   
<option value="G017">G017</option>   
<option value="G018">G018</option>    
</select>

    <br>

<br>
<label>Kode Penyakit</label>
    <br>
    <input type="text" class="form-control form-control-user"  value= <?php echo $kode_penyakit;?> disabled>

<br>    
<select name="kode_penyakit">
<option value="">--Pilih--</option>   
<option value="P01">P01</option>   
<option value="P02">P02</option>   
<option value="P03">P03</option>   
<option value="P04">P04</option>   
<option value="P05">P05</option>      
<option value="P06">P06</option>       
</select>

    <br>
    <br>
    <br>

    <input type="submit" class="btn btn-primary" name="updatebasis" value="Update Data">
    <button type="button" class="btn btn-secondary" onclick="history.back()">Kembali</button>
                    </div>
    </form>
                    </div>

                        <!-- Earnings (Monthly) Card Example -->
                        

                        <!-- Earnings (Monthly) Card Example -->
                        

                        <!-- Pending Requests Card Example -->
                        

                    
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Dinda Dwi Laras</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    

</body>

</html>