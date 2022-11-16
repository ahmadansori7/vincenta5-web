<?php
require ('..\koneksi.php');

//fungsi insert database
if(isset($_POST['tambah'])) {
    $id = $_POST['txt_id'];
    $gambar = $_POST['gambar'];
    $nama_produk = $_POST['txt_nama'];
    $harga = $_POST['txt_harga'];
    $stok = $_POST['txt_stok'];
    $deskripsi_produk = $_POST['txt_deskripsi'];

    $query  = mysqli_query($koneksi, "INSERT INTO `produk`(`id_produk`, `nama_produk`, `deskripsi_produk`, `harga`, `gambar`, `stok`) VALUES ('$id','$nama_produk','$deskripsi_produk','$harga','$gambar','$stok')");
    $result = mysqli_query($koneksi, $query);
    echo "<script>
eval(\"parent.location='produk.php '\");
alert (' Data Berhasil ditambahkan!');
</script>";

   
}  else {
    echo "<script>
    eval(\"parent.location='produk.php '\");
    alert (' Data Gagal ditambahkan!');
    </script>";
}