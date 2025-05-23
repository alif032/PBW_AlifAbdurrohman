<?php
$jumlah_roda = 2;
echo "Jumlah roda: $jumlah_roda<br>";
switch ($jumlah_roda) {
    case 2:
        echo "Jenis kendaraan: Motor atau Sepeda";
        break;
    case 3:
        echo "Jenis kendaraan: Bajaj";
        break;
    case 4:
        echo "Jenis kendaraan: Mobil";
        break;
    default:
        echo "Jenis kendaraan tidak diketahui";
}
?>