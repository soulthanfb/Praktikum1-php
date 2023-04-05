<?php 
require_once '../dbkoneksi.php';
?>

<div class="container">
<form method="POST" action="proses_vendor.php">
    <div class="form-group row">
        <label for="nomor" class="col-4 col-form-label">Nomor</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div>
                </div>
                <input id="nomor" name="nomor" type="text" class="form-control" value="">
            </div>
        </div>
    </div>
    <br>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div>
                <input id="nama" name="nama" type="text" class="form-control" value="">
            </div>
        </div>
    </div>
    <br>
    <div class="form-group row">
        <label for="kota" class="col-4 col-form-label">Kota</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-arrow-circle-up"></i>
                    </div>
                </div>
                <input id="kota" name="kota" value="" type="text" class="form-control">
            </div>
        </div>
    </div>
    <br>
    <div class="form-group row">
        <label for="kontak" class="col-4 col-form-label">Kontak</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-arrow-circle-up"></i>
                    </div>
                </div>
                <input id="kontak" name="kontak" value="" type="teks" class="form-control">
            </div>
        </div>
    </div>
    <br>
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