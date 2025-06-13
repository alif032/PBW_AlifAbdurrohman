<?php
include 'koneksi_db.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Mulai transaksi agar aman
    $conn->begin_transaction();

    try {
        // Hapus dulu data di detail_pesanan yang terkait buku ini
        $stmt1 = $conn->prepare("DELETE FROM Detail_Pesanan WHERE Buku_ID = ?");
        $stmt1->bind_param("i", $id);
        $stmt1->execute();
        $stmt1->close();

        // Hapus data buku
        $stmt2 = $conn->prepare("DELETE FROM Buku WHERE ID = ?");
        $stmt2->bind_param("i", $id);
        $stmt2->execute();
        $stmt2->close();

        // Commit transaksi
        $conn->commit();

        echo "<script>alert('Data berhasil dihapus'); window.location='index.php';</script>";
    } catch (Exception $e) {
        // Jika ada error rollback
        $conn->rollback();
        echo "<script>alert('Gagal menghapus data: " . addslashes($e->getMessage()) . "'); window.location='index.php';</script>";
    }
} else {
    echo "<script>alert('ID tidak valid. Pastikan parameter ID ada di URL'); window.location='index.php';</script>";
}

$conn->close();
?>
