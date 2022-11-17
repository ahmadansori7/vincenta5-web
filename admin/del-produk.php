<?php
require ('..\koneksi.php');

//fungsi update database
if(isset($_GET['delete'])){
    $id=$_REQUEST['id_produk'];
    $query  = mysqli_query($koneksi, "DELETE FROM produk WHERE `id_produk`='$id_produk'");
    $result = mysqli_query($koneksi, $query);
    // echo "<script>
    // eval(\"parent.location='produk.php '\");
    // alert (' Data Berhasil Dihapus!');
    // </script>";
    
       
    // }  else {
    //     echo "<script>
    //     eval(\"parent.location='produk.php '\");
    //     alert (' Data Gagal Dihapus!');
    //     </script>";
    }