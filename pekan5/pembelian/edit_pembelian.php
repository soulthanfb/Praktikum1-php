<?php 
require_once '../dbkoneksi.php';
?>

<div class="container">
<form method="POST" action="proses_pembelian.php">
<br>
    <div class="form-group row">
        <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div>
                <input id="tanggal" name="tanggal" type="date" class="form-control" value="">
            </div>
        </div>
    </div>
    <br>
    <div class="form-group row">
        <label for="nomor" class="col-4 col-form-label">Nomor</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div>
                </div>
                <input id="nomor" name="nomor" type="number" class="form-control" value="">
            </div>
        </div>
    </div>
    <br>
    <div class="form-group row">
        <label for="produk" class="col-4 col-form-label">Produk</label>
        <div class="col-8">
            <?php 
            $sqljenis = "SELECT * FROM produk";
            $rsjenis = $dbh->query($sqljenis);
        ?>
            <select id="produk_id" name="produk_id" class="custom-select">
                <?php 
            foreach($rsjenis as $rowjenis){
         ?>
                <option value="<?=$rowjenis['id']?>"><?=$rowjenis['nama']?></option>
                <?php
            }
        ?>            
        <!--
        <option value="1">Elektronik</option>
        <option value="2">Furniture</option>
        <option value="3">Makanan</option>-->

            </select>
        </div>
    </div>
    <br>
    <div class="form-group row">
        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div>
                <input id="jumlah" name="jumlah" type="number" class="form-control" value="">
            </div>
        </div>
    </div>
    <br>
    <div class="form-group row">
        <label for="harga" class="col-4 col-form-label">Harga</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div>
                <input id="harga" name="harga" type="teks" class="form-control" value="">
            </div>
        </div>
    </div>
    <br>
    <div class="form-group row">
        <label for="vendor" class="col-4 col-form-label">Nama Vendor</label>
        <div class="col-8">
            <?php 
            $sqljenis = "SELECT * FROM vendor";
            $rsjenis = $dbh->query($sqljenis);
        ?>
            <select id="vendor_id" name="vendor_id" class="custom-select">
                <?php 
            foreach($rsjenis as $rowjenis){
         ?>
                <option value="<?=$rowjenis['id']?>"><?=$rowjenis['nama']?></option>
                <?php
            }
        ?>          
        <!--
        <option value="1">Elektronik</option>
        <option value="2">Furniture</option>
        <option value="3">Makanan</option>-->

            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <?php
            $button = (empty($_idedit)) ? "Simpan" : "Update";
            ?>
            <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?= $button ?>" />
            <input type="hidden" name="idedit" value="<?= $_idedit ?>" />
        </div>
    </div>
</form>