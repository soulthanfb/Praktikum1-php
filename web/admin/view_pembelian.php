


<?php 
require_once 'dbkoneksi.php';
?>
<?php 
include_once 'top.php';
include_once 'menu.php';
?>
<?php
    $_id = $_GET['id'];
    // select * from pelanggan where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM pelanggan a
    //INNER JOIN jenis_pelanggan b ON a.jenis_pelanggan_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM pembelian WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA pelanggan ' . $row['nama'];
?>

<table class="table table-striped">
    <tbody>
        <tr>
            <td>Tanggal</td>
            <td><?=$row['tanggal']?></td>
        </tr>
        <tr>
            <td>Nomor</td>
            <td><?=$row['nomor']?></td>
        </tr>
        <tr>
            <td>Produk</td>
            <td><?=$row['produk_id']?></td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td><?=$row['jumlah']?></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><?= "Rp.".number_format($row['harga'],2,',','.'); ?></td>
        </tr>
        <tr>
            <td>Nama Vendor</td>
            <td><?=$row['vendor_id']?></td>
        </tr>
        
    </tbody>
</table>
<?php 
include_once 'bottom.php';
?>