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
  
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<script>function confirmDelete() {
            if (confirm("Anda yakin ingin menghapus data ini?") == true) {
                return true;
            } else {
                return false;
            }
        }
    </script>
    
    <script>function confirmLogout() {
            if (confirm("Anda yakin ingin logout?") == true) {
                return true;
            } else {
                return false;
            }
        }
    </script>  
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
                <a class="nav-link collapsed" href="#">
                    
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
            <h1 class="h3 mb-0 text-gray-800">Daftar Admin</h1>
                        
                       </div>

                          
        <button onclick="location.href='tambahadmin.php'" type="button" class="btn btn-primary" name="tambahadmin"> + Tambah Data Admin </button>
                  <br>
                  <br>

                          <div class="container">
                        <table id="tbadmin">
                            <thead>
                          <tr>
                            <th>ID</th>
                             <th>Username</th>
                              <th>Password</th>
                              <th>Aksi</th>
                          </tr>
                          </thead>
                        <tbody>
                        <?php
                          include '../config.php';

                          
                          $admin = mysqli_query($conn,"SELECT * FROM tb_admin"); 
                          while($row = mysqli_fetch_array($admin)) 
                          {
                                $id = $row['id_admin'];
                                $username = $row['username'];
                                $password = $row['password'];
                                 
                                 ?>
                                  <tr>
                                    <td><?php echo $id?></td>
                                    <td><?php echo $username ?></td>
                                    <td><?php echo $password ?></td>
                                    

                                    <td>
                                        <a href="editadmin.php?editid=<?php echo $id ?>">

                                        <button type="button" class="btn btn-warning" name="editadmin">Update</button> </a>

                                   <a href="hapusadmin.php?deleteid=<?php echo $id ?>" onclick="return confirmDelete();">  

                                    <button type="button" class="btn btn-danger" name="editadmin">Hapus</button> </a>

                                    </td>

                                     </tr>
                                     <?php
                         }
                            ?>
                        
                      

                      </tbody>            
                        </table>
<script>
    $(document).ready(function () {
    $('#tbadmin').DataTable();
});


</script>
          
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