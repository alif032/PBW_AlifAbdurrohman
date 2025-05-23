<!DOCTYPE html>
<html>
<head>
    <title>Latihan Navigasi</title>
</head>
<body>
    <h2>Menu Latihan</h2>
    <ul>
        <li><a href="latihan1.php">Soal 1: Switch Kendaraan</a></li>
        <li><a href="latihan2.php">Soal 2: For Bilangan Genap</a></li>
        <li><a href="latihan3.php">Soal 3: Array Hewan Foreach</a></li>
        <li><a href="latihan4.php">Soal 4: Ternary Genap/Ganjil</a></li>
    </ul>
    <hr>
    <?php
    if (isset($_GET['page'])) {
        include $_GET['page'] . '.php';
    } else {
        echo "Silakan pilih menu di atas.";
    }
    ?>
</body>
</html>
