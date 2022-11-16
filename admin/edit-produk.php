<?php
require ('..\koneksi.php');

//fungsi update database
if(isset($_POST['update'])) {
    $id = $_POST['idproduk'];
    $gambar = $_POST['gambar'];
    $nama_produk = $_POST['txt_nama'];
    $harga = $_POST['txt_harga'];
    $stok = $_POST['txt_stok'];
    $deskripsi_produk = $_POST['txt_deskripsi'];

    $query  = mysqli_query($koneksi, "UPDATE `produk` SET `nama_produk`='$nama_produk',`deskripsi_produk`='$deskripsi_produk',`harga`='$harga',`stok`='$stok' WHERE `id_produk`='$id'");
    $result = mysqli_query($koneksi, $query);
    echo "<script>
    eval(\"parent.location='produk.php '\");
    alert (' Data Berhasil Diupdate!');
    </script>";
    
       
    }  else {
        echo "<script>
        eval(\"parent.location='produk.php '\");
        alert (' Data Gagal Diupdate!');
        </script>";
    }