<?php
require ('..\koneksi.php');
session_start();


header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data-transaksi.xls");

if (!isset($_SESSION["ses"])) {
    echo "<script>
    eval(\"parent.location='../login.php '\");
    alert (' Anda harus login terlebih dahulu');
    </script>";
	exit;

}

?>

<html>
    <head><title>Export Data Transaksi</title>

</head>
    <body>

    <h1 style="text-align:center;">Data Transaksi</h1>

            <table style="text-align:center;" width="100%" border="1" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id Transaksi</th>
                        <th>Tanggal</th>
                        <th>Nama Customer</th>
                        <th>Alamat</th>
                        <th>Order Produk</th>
                        <th>Total</th>
                       
                    </tr>
                </thead>
               
                <tbody>
                   
        <?php
        $query = "select transaksi.id_transaksi as id, transaksi.tanggal_transaksi as tgl, user.nama_lengkap as nama, user.alamat as alamat, transaksi.total_bayar as total_bayar FROM transaksi JOIN user ON transaksi.username=user.username ORDER BY tgl DESC";
        $result = mysqli_query($koneksi, $query);
        $no = 1;
        while ($row = mysqli_fetch_array($result)) {
            $idtransaksi = $row['id'];
            $tgltransaksi = $row['tgl'];
            $namalengkap = $row['nama'];
            $alamat = $row['alamat'];
            $totalbayar = $row['total_bayar'];
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
           
        </tr>

        <?php
        $no++;
        } ?>

                </tbody>
            </table>

</body>
</html>