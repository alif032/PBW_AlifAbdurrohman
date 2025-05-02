<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Total Pembelian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .kotak {
            border: 1px solid #000;
            padding: 20px;
            width: 400px;
        }
        .judul {
            font-size: 18px;
            font-weight: bold;
        }
        .garis {
            border-top: 1px solid #000;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .tebal {
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php
// Konstanta dan data
define("PAJAK", 0.10);
$barang = ["Keyboard" => 150000];
$nama_barang = "Keyboard";
$harga_satuan = $barang[$nama_barang];
$jumlah_beli = 6;

// Perhitungan
$total_harga = $harga_satuan * $jumlah_beli;
$pajak = $total_harga * PAJAK;
$total_bayar = $total_harga + $pajak;
?>

<div class="kotak">
    <div class="judul">Perhitungan Total Pembelian (Dengan Array)</div>
    <div class="garis"></div>
    <p>Nama Barang: <?= $nama_barang ?></p>
    <p>Harga Satuan: Rp <?= number_format($harga_satuan, 0, ',', '.') ?></p>
    <p>Jumlah Beli: <?= $jumlah_beli ?></p>
    <p>Total Harga (Sebelum Pajak): Rp <?= number_format($total_harga, 0, ',', '.') ?></p>
    <p>Pajak (10%): Rp <?= number_format($pajak, 0, ',', '.') ?></p>
    <p class="tebal">Total Bayar: Rp <?= number_format($total_bayar, 0, ',', '.') ?></p>
</div>

</body>
</html>
