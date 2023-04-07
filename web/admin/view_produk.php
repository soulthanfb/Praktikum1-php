<?php
require_once 'dbkoneksi.php';
?>
<?php 
include_once 'top.php';
include_once 'menu.php';
?>
<?php
$_id = $_GET['id'];
// select * from produk where id = $_id;
//$sql = "SELECT a.*,b.nama as jenis FROM produk a
//INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
$sql = "SELECT * FROM produk WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);
$row = $st->fetch();
//echo 'NAMA PRODUK ' . $row['nama'];
?>

<table class="table table-striped">
    <tbody>
        <tr>
            <td>Kode</td>
            <td><?= $row['kode'] ?></td>
        </tr>
        <tr>
            <td>Nama Produk</td>
            <td><?= $row['nama'] ?></td>
        </tr>
        <tr>
            <td>Harga Jual</td>
            <td><?= "Rp.".number_format($row['harga_jual'],2,',','.'); ?></td>
        </tr>
        <tr>
            <td>Harga Beli</td>
            <td><?= "Rp.".number_format($row['harga_beli'],2,',','.'); ?></td>
        </tr>
        <tr>
            <td>Stok</td>
            <td><?= $row['stok'] ?></td>
        </tr>
        <tr>
            <td>Minimum Stok</td>
            <td><?= $row['min_stok'] ?></td>
        </tr>
        <tr>
            <td>Jenis Produk</td>
            <td><?= $row['jenis_produk_id'] ?></td>
        </tr>
    </tbody>
</table>
<?php 
include_once 'bottom.php';
?>