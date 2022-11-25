<?php
require ('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Homapage | V-Angkringan</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="#" class="logo d-flex align-items-center">
        <!-- <img src="assets/gambar/Logo.png" alt=""> -->
        <span>V-Angkringan</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#profil">Profil</a></li>
          <li><a class="nav-link scrollto" href="#daftarmenu">Produk</a></li>
          <li><a class="nav-link scrollto" href="#lokasi">Lokasi</a></li>
          <li><a class="getstarted scrollto" href="login.php">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">ANGKRINGAN MBAH SINGO.</h1>
          <p data-aos="fade-up" data-aos-delay="400">Tempat nongkrong rekomended di Nganjuk untuk menikmati waktu luang bersama teman dan sahabat anda.</p>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#lokasi" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Cek Lokasi</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/gambar/mbah-singo.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="profil" class="profil">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-12 justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="section-title text-center">
              <h3>MENGAPA MEMILIH </br>MBAH SINGO ?</h3>
              <img src="assets/gambar/line.png" class="img-fluid" alt="" style="width:50px;">
              <p>Berikut ini mengapa anda harus nongkrong di <i>Angkringan Mbah Singo.</i></p>
        </div>
    
        <div class="row gy-4 pricing col-lg-12 justify-content-center" data-aos="fade-left">

<div class="col-lg-3 col-md-8 " data-aos="zoom-in" data-aos-delay="100">
  <div class="box">
   
    <img src="assets/gambar/murah.png" class="img-fluid" alt="">
    </br>
    <h3>Harga Terjangkau</h3>
  </div>
</div>

<div class="col-lg-3 col-md-8" data-aos="zoom-in" data-aos-delay="200">
  <div class="box">
   
  <img src="assets/gambar/ramah.png" class="img-fluid" alt="">
</br>
    <h3>Pelayanan Ramah</h3>
  </div>
</div>

<div class="col-lg-3 col-md-8" data-aos="zoom-in" data-aos-delay="300">
  <div class="box">
   
  <img src="assets/gambar/bersih.png" class="img-fluid" alt="">
  </br>
    <h3>Lokasi Bersih</h3>
  </div>
</div>
   
         </div>
        


</div>
</div>

    </section><!-- End About Section -->

    <!-- ======= Values Section ======= -->
    <section id="daftarmenu" class="values bg-primary">

      <div class="container" data-aos="fade-up">

      <div class="section-title text-white text-center">
              <h3>DAFTAR MENU</h3>
              <img src="assets/gambar/line2.png" class="img-fluid" alt="" style="width:50px;">
              <p class="text-white">Berikut ini daftar makanan dan minuman di <i>Angkringan Mbah Singo.</i></p>
        </div>

                    <!-- <?php
                    $produk1  = mysqli_query($koneksi, "SELECT `id_produk`, `nama_produk`, `deskripsi_produk`, `harga`, `gambar`, `stok` FROM `produk` ORDER BY `id_produk` ASC");
                    while ($row = mysqli_fetch_array($produk1)) {
                    ?> -->

        <div class="row gy-4 pricing col-lg-12 justify-content-center" data-aos="fade-left">
<!-- 
<div class="col-lg-3 col-md-8 " data-aos="zoom-in" data-aos-delay="100">
  <div class="box">
   
    <img src="admin/gambarproduk/<?php echo $row['gambar']; ?>" class="img-fluid rounded-circle" style="width:300px;" alt="">
<hr>
    <span id="boot-icon" class="bi bi-star" style="font-size: 19px; color: rgb(255, 210, 48); opacity: 1; -webkit-text-stroke: 0px rgb(251, 255, 0);"></span>
    <span id="boot-icon" class="bi bi-star" style="font-size: 19px; color: rgb(255, 210, 48); opacity: 1; -webkit-text-stroke: 0px rgb(251, 255, 0);"></span>
    <span id="boot-icon" class="bi bi-star" style="font-size: 19px; color: rgb(255, 210, 48); opacity: 1; -webkit-text-stroke: 0px rgb(251, 255, 0);"></span>
    <span id="boot-icon" class="bi bi-star" style="font-size: 19px; color: rgb(255, 210, 48); opacity: 1; -webkit-text-stroke: 0px rgb(251, 255, 0);"></span>
    <span id="boot-icon" class="bi bi-star" style="font-size: 19px; color: rgb(255, 210, 48); opacity: 1; -webkit-text-stroke: 0px rgb(251, 255, 0);"></span>

    <div class="text-center">
    <h5><?php echo $row['nama_produk']; ?></h5>
    <p>Rp. <?php echo $row['harga']; ?></p>
    </div>
  </div>
</div>

<?php 
 }
?>  -->


<?php
                    $produk1  = mysqli_query($koneksi, "SELECT `id_produk`, `nama_produk`, `deskripsi_produk`, `harga`, `gambar`, `stok` FROM `produk` ORDER BY `id_produk` ASC");
                    while ($row = mysqli_fetch_array($produk1)) {
                    ?>
<div class="col-lg-3 col-md-8" data-aos="zoom-in" data-aos-delay="200">
<div class="box">
   
<img src="admin/gambarproduk/<?php echo $row['gambar']; ?>" class="img-fluid rounded-circle" style="width:300px;" alt="">
<hr>
   <span id="boot-icon" class="bi bi-star" style="font-size: 19px; color: rgb(255, 210, 48); opacity: 1; -webkit-text-stroke: 0px rgb(251, 255, 0);"></span>
   <span id="boot-icon" class="bi bi-star" style="font-size: 19px; color: rgb(255, 210, 48); opacity: 1; -webkit-text-stroke: 0px rgb(251, 255, 0);"></span>
   <span id="boot-icon" class="bi bi-star" style="font-size: 19px; color: rgb(255, 210, 48); opacity: 1; -webkit-text-stroke: 0px rgb(251, 255, 0);"></span>
   <span id="boot-icon" class="bi bi-star" style="font-size: 19px; color: rgb(255, 210, 48); opacity: 1; -webkit-text-stroke: 0px rgb(251, 255, 0);"></span>
   <span id="boot-icon" class="bi bi-star" style="font-size: 19px; color: rgb(255, 210, 48); opacity: 1; -webkit-text-stroke: 0px rgb(251, 255, 0);"></span>

   <div class="text-center">
   <h5><?php echo $row['nama_produk']; ?></h5>
    <p>Rp. <?php echo $row['harga']; ?></p>
   </div>
 </div>
</div>

<?php 
 }
?> 

<!-- 
<?php
                    $produk1  = mysqli_query($koneksi, "SELECT `id_produk`, `nama_produk`, `deskripsi_produk`, `harga`, `gambar`, `stok` FROM `produk` ORDER BY `id_produk` ASC");
                    while ($row = mysqli_fetch_array($produk1)) {
                    ?>
<div class="col-lg-3 col-md-8" data-aos="zoom-in" data-aos-delay="300">
<div class="box">
   
<img src="admin/gambarproduk/<?php echo $row['gambar']; ?>" class="img-fluid rounded-circle" style="width:300px;" alt="">
<hr>
   <span id="boot-icon" class="bi bi-star" style="font-size: 19px; color: rgb(255, 210, 48); opacity: 1; -webkit-text-stroke: 0px rgb(251, 255, 0);"></span>
   <span id="boot-icon" class="bi bi-star" style="font-size: 19px; color: rgb(255, 210, 48); opacity: 1; -webkit-text-stroke: 0px rgb(251, 255, 0);"></span>
   <span id="boot-icon" class="bi bi-star" style="font-size: 19px; color: rgb(255, 210, 48); opacity: 1; -webkit-text-stroke: 0px rgb(251, 255, 0);"></span>
   <span id="boot-icon" class="bi bi-star" style="font-size: 19px; color: rgb(255, 210, 48); opacity: 1; -webkit-text-stroke: 0px rgb(251, 255, 0);"></span>
   <span id="boot-icon" class="bi bi-star" style="font-size: 19px; color: rgb(255, 210, 48); opacity: 1; -webkit-text-stroke: 0px rgb(251, 255, 0);"></span>

   <div class="text-center">
   <h5><?php echo $row['nama_produk']; ?></h5>
    <p>Rp. <?php echo $row['harga']; ?></p>
   </div>
 </div>
</div>

<?php 
 }
?>  -->
   
         </div>
        

      </div>

    </section><!-- End Values Section -->

    <!-- ======= Lokasi Section ======= -->
    <section id="lokasi" class="portfolio">

      <div class="container" data-aos="fade-up">

      <div class="col-lg-12 justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="section-title text-center">
              <h3>LOKASI </br>MBAH SINGO</h3>
              <img src="assets/gambar/line.png" class="img-fluid" alt="" style="width:50px;">
              <p>Berikut ini adalah lokasi <i>Angkringan Mbah Singo.</i></p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1012471.4128978538!2d111.02878596017436!3d-7.5786302434302435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e784b040b42c417%3A0x7c3edde05a27a7ed!2sAngkringan%20Mbah%20Singo!5e0!3m2!1sid!2sid!4v1667967953828!5m2!1sid!2sid" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

          </div>
        </div>
      
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" >

      <div class="container" data-aos="fade-up">

      <div class="section-title text-center">
              <h3>KRITIK DAN SARAN</h3>
              <img src="assets/gambar/line.png" class="img-fluid" alt="" style="width:50px;">
              <p>Kritik dan saran anda berguna bagi kami untuk ke depannya.</i></p>
        </div>
        <div class="row gy-4 ">

          <div class="col-md-4 ">

          <img src="assets/gambar/cs.png" class="img-fluid" alt="">

          </div>

          <div class="col-lg-8" >
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-12">
                  <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Kritik dan Saran" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button class="col-md-12 text-center" type="submit">Kirim</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-top bg-black">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
            <img src="assets/gambar/a5-img.png">
            </a>
            <p style="color:white;">Jl. Jaksa Agung Suprapto No.29, Kauman, Kec. Nganjuk,  Kabupaten Nganjuk, Jawa Timur 64411.</p>
           
          </div>

          <div class="col-lg-4 col-md-12 footer-links">
            <h4 style="color:white;">Sosial Media</h4>
            <div class="social-links mt-3">
              <a href="#" class="facebook text-primary"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram text-danger"><i class="bi bi-instagram"></i></a>
              <a href="#" class="whatsapp text-success"><i class="bi bi-whatsapp"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-6 footer-links">
            <h4 style="color:white;">Supported By</h4>
            <img src="assets/gambar/polije.png" class="img-fluid" alt=""> | <img src="assets/gambar/a5.png" class="img-fluid" alt="">
          </div>

          <div class="container">
      <div class="copyright " style="color:white;">
       <p> Copyright &copy; <strong><span>2022</span></strong>. V-Angkringan</p>
      </div>
          </div>

        </div>
      </div>
    </div>

          </footer>

    

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>