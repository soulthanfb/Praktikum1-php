<?php 
    require_once 'dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM pembelian";
   $rs = $dbh->query($sql);
?>

<a class="btn btn-success" href="index.php? hal=form_pembelian" role="button">Create Pembelian</a>
<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2" id="datatablesSimple">
    <thead>
        <tr style="text-align: center;">
            <th>No</th>
            <th>Tanggal</th>
            <th>Nomor</th>
            <th>Produk</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Vendor</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
        <tr style="text-align: center;">
        <td><?= $nomor++ ?></td>
                <td><?= $row['tanggal'] ?></td>
                <td><?= $row['nomor'] ?></td>
                <td><?= $row['produk_id'] ?></td>        
                <td><?= $row['jumlah'] ?></td>
                <td><?= "Rp.".number_format($row['harga'],2,',','.'); ?></td>
                <td><?= $row['vendor_id'] ?></td>
            
            
            <td>
                <a class="btn btn-primary" href="view_pembelian.php?id=<?=$row['id']?>">View</a>
                <a class="btn btn-warning" href="edit_pembelian.php?idedit=<?=$row['id']?>">Edit</a>
                <a class="btn btn-danger" href="delete_pembelian.php?iddel=<?=$row['id']?>"
                    onclick="if(!confirm('Anda Yakin Hapus Data Pelanggan <?=$row['id']?>?')) {return false}">Delete</a>
            </td>
        </tr>
        <?php 
                $nomor++;   
                } 
                ?>
    </tbody>
</table>