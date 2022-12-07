<?php
require ('..\koneksi.php');
session_start();

if (!isset($_SESSION["ses"])) {
    echo "<script>
    eval(\"parent.location='../login.php '\");
    alert (' Anda harus login terlebih dahulu');
    </script>";
	exit;
}

$user = $_SESSION['ses'];

if(isset($_POST['updateprofile'])) {

    $email = $_POST['txt_email'];
    $pass = $_POST['txt_pass'];
    $nama = $_POST['txt_nama'];
    $nohp = $_POST['txt_nohp'];
    $alamat = $_POST['txt_alamat'];


    $query  = mysqli_query($koneksi, "UPDATE `user` SET `email`='$email',`password`='$pass',`nama_lengkap`='$nama',`no_hp`=$nohp,`alamat`='$alamat' WHERE `username`='$user'");
    $result = mysqli_query($koneksi, $query);
    echo "<script>
    alert (' Profile Berhasil Diupdate!');
    </script>";
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

    <title>Transaksi</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                    <img src="..\assets\gambar\a5-img.png" style="width:70%">
                </div>
            
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Produk -->
            <li class="nav-item">
                <a class="nav-link" href="produk.php">
                    <i class="fas fa-fw fa-calendar"></i>
                    <span>Produk</span></a>
            </li>

            <!-- Nav Item - Transaksi -->
            <li class="nav-item active">
                <a class="nav-link" href="transaksi.php">
                    <i class="fas fa-fw fa-dollar-sign"></i>
                    <span>Transaksi</span></a>
            </li>

            <!-- Nav Item - Transaksi -->
                        <li class="nav-item">
                <a class="nav-link" href="laporan.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Laporan</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['ses'] ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#ProfileDetail">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
            
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                 <!-- Modal Profile Detail -->
             <div class="modal fade" id="ProfileDetail" role="dialog" tabindex="-1">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                  <h4 class="modal-title"><i class="fas fa-user"></i> Informasi Profile</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <form method="POST" action="#" enctype="multipart/form-data">
                        <?php
                        
                        $query_edit1 = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$user'");
                        while ($row = mysqli_fetch_array($query_edit1)) {  
        
                        ?>
                      
                          
                            
                          <input type="hidden" name="txt_user" value="<?php echo $row['username']; ?>" class="form-control" disabled>      
                       
                        
                        <div class="form-group">
                          <label>Email</label>
                          <input type="text" name="txt_email" value="<?php echo $row['email']; ?>" class="form-control" disabled>      
                        </div>
                        
                        <div class="form-group">
                          <label>Nama Lengkap</label>
                          <input type="text" name="txt_nama" value="<?php echo $row['nama_lengkap']; ?>" class="form-control" disabled>      
                        </div>

                        <div class="form-group">
                          <label>No. HP</label>
                          <input type="number" name="txt_nohp" value="<?php echo $row['no_hp']; ?>" class="form-control" disabled>      
                        </div>
                        <div class="form-group">
                          <label>Alamat Lengkap</label>
                          <input type="text" name="txt_alamat" value="<?php echo $row['alamat']; ?>" class="form-control" disabled>      
                        </div>
                       
                        <div class="modal-footer">  
                          <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myProfile" data-bs-dismiss="modal">Update</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        <?php 
                        }
                        ?>        
                      </form>
                  </div>
                </div>
              </div>
            </div>


                         <!-- Modal Edit -->
                         <div class="modal fade" id="myProfile" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                  <h4 class="modal-title"><i class="fas fa-edit"></i> Edit Profile</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <form method="POST" action="#" enctype="multipart/form-data">
                        <?php
                        
                        $query_edit1 = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$user'");
                        while ($row = mysqli_fetch_array($query_edit1)) {  
        
                        ?>
                      
                          
                            
                          <input type="hidden" name="txt_user" value="<?php echo $row['username']; ?>" class="form-control" disabled>      
                       
                        
                        <div class="form-group">
                          <label>Email</label>
                          <input type="text" name="txt_email" value="<?php echo $row['email']; ?>" class="form-control" required>      
                        </div>
                        <div class="form-group">
                          <label>Password</label>
                          <input type="password" name="txt_pass" value="<?php echo $row['password']; ?>" class="form-control" required>      
                        </div>
                        <div class="form-group">
                          <label>Nama Lengkap</label>
                          <input type="text" name="txt_nama" value="<?php echo $row['nama_lengkap']; ?>" class="form-control" required>      
                        </div>

                        <div class="form-group">
                          <label>No. HP</label>
                          <input type="number" name="txt_nohp" value="<?php echo $row['no_hp']; ?>" class="form-control" required>      
                        </div>
                        <div class="form-group">
                          <label>Alamat Lengkap</label>
                          <input type="text" name="txt_alamat" value="<?php echo $row['alamat']; ?>" class="form-control" required>      
                        </div>
                       
                        <div class="modal-footer">  
                          <button name="updateprofile" id="updateprofile" class="btn btn-primary">Update</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        <?php 
                        }
                        ?>        
                      </form>
                  </div>
                </div>
              </div>
            </div>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Transaksi</h1> <a href="export-data-transaksi.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-clipboard-list fa-sm text-white-50"></i> Export Data</a>
                        
                    </div>

                    <!-- Content Row -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Id Transaksi</th>
                                            <th>Tanggal</th>
                                            <th>Nama Customer</th>
                                            <th>Alamat</th>
                                            <th>Order Produk</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                       
                            <?php
                            $query = "select transaksi.id_transaksi as id, transaksi.tanggal_transaksi as tgl, user.nama_lengkap as nama, user.alamat as alamat, transaksi.total_bayar as total_bayar, transaksi.status as status FROM transaksi JOIN user ON transaksi.username=user.username ORDER BY tgl DESC";
                            $result = mysqli_query($koneksi, $query);
                            $no = 1;
                            while ($row = mysqli_fetch_array($result)) {
                                $idtransaksi = $row['id'];
                                $tgltransaksi = $row['tgl'];
                                $namalengkap = $row['nama'];
                                $alamat = $row['alamat'];
                                $totalbayar = $row['total_bayar'];
                                $status = $row['status'];
                                ?>

                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $idtransaksi; ?></td>
                                <td><?php echo $tgltransaksi; ?></td>
                                <td><?php echo $namalengkap; ?></td>
                                <td><?php echo $alamat; ?></td>

                                <?php 
                                $query1 = "select produk.nama_produk as produk, dtl_transaksi.jumlah_beli as jumlah_beli from dtl_transaksi join produk on dtl_transaksi.id_produk = produk.id_produk where dtl_transaksi.id_transaksi = '$idtransaksi'";
                                $result1 = mysqli_query($koneksi, $query1);
                                while ($row = mysqli_fetch_array($result1)) {
                                $produk = $row['produk'];
                                $jumlah_beli = $row['jumlah_beli']; 
                                ?>

                                <td><?php echo $produk; ?> (<?php echo $jumlah_beli; ?>x)</td>

                                <?php
                                 }
                                ?>

                                <td><?php echo $totalbayar; ?></td>
                                <td>

                                <?php 
                                    if($status=="0") {
                                        echo "<a class='btn btn-warning btn-circle' title='Transaksi sedang Diproses' href='proses-trans.php?id=$idtransaksi'><i class='fas fa-clock'></i></a>";
                                    }
                                    else {
                                        echo "<a class='btn btn-success btn-circle' title='Transaksi sudah Selesai' href='#'><i class='fas fa-check'></i></a>";
                                    }
                                    
                                   

                                    ?>
            
                                </td>
                            </tr>

                            <?php
                            $no++;
                            } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        
                    </div>

                    
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; V-Angkringan <?php echo date('Y'); ?></span>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>