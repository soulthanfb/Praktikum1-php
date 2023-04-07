<?php
require_once "class_lingkaran.php";
echo "Nilai PHI ".lingkaran::PHI;
$lingkaran1 = new lingkaran(10);
$lingkaran2 = new lingkaran(4);

echo "</br>Luas Lingkaran 1".$lingkaran1->getLuas();
echo "</br>Luas Lingkaran 2".$lingkaran2->getLuas();

?>