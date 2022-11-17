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

$query = mysqli_query($koneksi, "SELECT max(id_produk) as kodeTerbesar FROM produk");
$data = mysqli_fetch_array($query);
$kodeBarang = $data['kodeTerbesar'];
$urutan = (int) substr($kodeBarang, 4, 4);
$urutan++;
$huruf = "PRDK";
$kodeBarang = $huruf . sprintf("%03s", $urutan);

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Produk</title>

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
            <li class="nav-item active">
                <a class="nav-link" href="produk.php">
                    <i class="fas fa-fw fa-calendar"></i>
                    <span>Produk</span></a>
            </li>

            <!-- Nav Item - Transaksi -->
            <li class="nav-item">
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
                                <a class="dropdown-item" href="#">
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

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Produk</h1> 
                        
                        <a href="#" data-toggle="modal" data-target="#addProduk" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus-circle fa-sm text-white-50"></i> Tambahkan Produk</a>

                         <!-- Modal Tambahkan Data -->
            <div class="modal fade" id="addProduk" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title"><i class="fas fa-plus-circle"></i> Tambah Produk</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <form method="POST" action="add-produk.php">

                     <input type="hidden" name="txt_id" value="<?php echo $kodeBarang; ?>">
                        <div class="form-group">
                          <label>Nama Produk</label>
                          <input type="text" name="txt_nama" class="form-control" required>      
                        </div>
                        <div class="form-group">
                          <label>Harga</label>
                          <input type="number" name="txt_harga" class="form-control" required>      
                        </div>

                        <div class="form-group">
                          <label>Stok</label>
                          <input type="number" name="txt_stok" class="form-control" required>      
                        </div>
                        <div class="form-group">
                          <label>Deskripsi</label>
                          <input type="text" name="txt_deskripsi" class="form-control" required>      
                        </div>
                        <div class="form-group">
                          <label>Gambar</label>
                          <input type="file" name="gambar" class="form-control">       
                          <small style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</small>
                    

                        </div>
                        <div class="modal-footer">  
                          <button type="submit" name="tambah" class="btn btn-primary">Tambahkan</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                        </div>       
                      </form>
                  </div>
                </div>
              </div>
            </div>
                        
                    </div>

                    <!-- Content Row -->
                    <div class="row card shadow mb-4">

                    <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Image</th>
                                            <th>Nama Produk</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th>Deskripsi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                       
                            <?php
                            $query = "Select * from produk order by nama_produk asc";
                            $result = mysqli_query($koneksi, $query);
                            $no = 1;
                            while ($row = mysqli_fetch_array($result)) {
                                $idproduk = $row['id_produk'];
                                $gambar = $row['gambar'];
                                $namaproduk = $row['nama_produk'];
                                $harga = $row['harga'];
                                $stok = $row['stok'];
                                $deskripsi = $row['deskripsi_produk'];

                                ?>

                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><img style="width:80px;" src="img/not-found.jpg" ></td>
                                <td><?php echo $namaproduk; ?></td>
                                <td><?php echo $harga; ?></td>
                                <td><?php echo $stok; ?></td>
                                <td><?php echo $deskripsi; ?></td>
                                <td>
                                    <a class="btn btn-success btn-circle" href="#" data-toggle="modal" data-target="#myUpdate<?php echo $row['id_produk']; ?>"><i class="fas fa-edit"></i></a>

                                     <!-- Modal Edit -->
            <div class="modal fade" id="myUpdate<?php echo $row['id_produk']; ?>" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                  <h4 class="modal-title"><i class="fas fa-edit"></i> Edit Produk</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <form method="POST" action="edit-produk.php">
                        <?php
                        $id = $row['id_produk']; 
                        $query_edit = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk='$id'");
                        while ($row = mysqli_fetch_array($query_edit)) {  
                        ?>
                        <input type="hidden" name="idproduk" value="<?php echo $id; ?>">
                        <div class="form-group">
                          <label>Nama Produk</label>
                          <input type="text" name="txt_nama" value="<?php echo $row['nama_produk']; ?>" class="form-control" required>      
                        </div>
                        <div class="form-group">
                          <label>Harga</label>
                          <input type="number" name="txt_harga" value="<?php echo $row['harga']; ?>" class="form-control" required>      
                        </div>

                        <div class="form-group">
                          <label>Stok</label>
                          <input type="number" name="txt_stok" value="<?php echo $row['stok']; ?>" class="form-control" required>      
                        </div>
                        <div class="form-group">
                          <label>Deskripsi</label>
                          <input type="text" name="txt_deskripsi" value="<?php echo $row['deskripsi_produk']; ?>" class="form-control" required>      
                        </div>
                        <div class="form-group">
                          <label>Gambar</label>
                          <input type="file" name="gambar" class="form-control">       
                          <small style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</small>
                    

                        </div>
                        <div class="modal-footer">  
                          <button name="update"  class="btn btn-primary">Update</button>
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

            <a class="btn btn-danger btn-circle" href="#" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i></a>

            <!-- Hapus Modal-->
            <div class="modal fade" id="deleteModal" role="dialog">
       
       <div class="modal-dialog">
       
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Apakah anda ingin menghapus data?</h5>
                   <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">×</span>
                   </button>
               </div>
               <div class="modal-body">
               <form method="POST" action="edit-produk.php">
               Tekan tombol "Hapus Data" untuk menghapus data produk secara permanent.
               <div class="modal-footer">  
               <a class="btn btn-danger" href="del-produk.php?id_produk=<?php echo $row[$id]; ?>">Hapus Data</a>
                   <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                     </form>
                     </div>
                     </div>
           </div>
       </div>
       </div>
            
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

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>