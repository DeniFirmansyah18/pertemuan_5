<?php

$pemasukan = 50000000;
$hutangA = 16500000;
$bungaHutangA = 0.05;
$hutangB = 9500000;
$bungaHutangB = 0.045;

//Hitung total bunga hutang
$totalBungaHutang = $hutangA * $bungaHutangA + $hutangB * $bungaHutangB;

//Hitung total hutang
$totalHutang = $hutangA + $hutangB;

//Hitung sisa uang
$sisaUang = $pemasukan - $totalHutang;

echo "Sisa Uang: " . number_format($sisaUang, 0, ',', '.') . "\n";
echo "Jumlah Total Bunga Hutang: " . number_format($totalBungaHutang, 0, ',', '.') . "\n";
echo "Jumlah Total Hutang: " . number_format($totalHutang, 0, ',', '.');

?>
