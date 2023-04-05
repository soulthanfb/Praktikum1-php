<?php 
require_once '../dbkoneksi.php';
$_iddel = $_GET['iddel'];

// Delete related records in pesanan_items table
$sql_delete = "DELETE FROM pesanan_items WHERE produk_id = ?";
$st_delete = $dbh->prepare($sql_delete);
$st_delete->execute([$_iddel]);

// Delete row from produk table
$sql_delete = "DELETE FROM produk WHERE id = ?";
$st_delete = $dbh->prepare($sql_delete);
$st_delete->execute([$_iddel]);

// Redirect to product list page
header('location:list_produk.php');

?>