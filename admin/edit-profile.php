<?php
require ('..\koneksi.php');

//fungsi update database
if(isset($_POST['updateprofile'])) {
    $user = $_POST['txt_user'];
    $email = $_POST['txt_email'];
    $pass = $_POST['txt_pass'];
    $nama = $_POST['txt_nama'];
    $nohp = $_POST['txt_nohp'];
    $alamat = $_POST['txt_alamat'];

    $query  = mysqli_query($koneksi, "UPDATE `user` SET `email`='$email',`password`='$pass',`nama_lengkap`='$nama',`no_hp`=$nohp,`alamat`='$alamat' WHERE `username`='$user'");
    $result = mysqli_query($koneksi, $query);
    // echo "<script>
    // eval(\"parent.location='index.php '\");
    // alert (' Profile Berhasil Diupdate!');
    // </script>";
    
       
    }  else {
        // echo "<script>
        // eval(\"parent.location='index.php '\");
        // alert (' Profile Gagal Diupdate!');
        // </script>";
    }


    ?>