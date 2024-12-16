<?php
// Sertakan koneksi database
include '../api/koneksi.php';

// Periksa apakah parameter ID dan NID tersedia
if (isset($_GET['id']) && isset($_GET['nid'])) {
    $id = intval($_GET['id']); // Pastikan id adalah angka
    $nid = $_GET['nid']; // Simpan parameter nid dari URL

    // Query untuk menghapus data mahasiswa berdasarkan ID
    $query = "DELETE FROM mahasiswa WHERE id = ?";
    $stmt = $conn->prepare($query);

    if ($stmt) {
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            // Berhasil menghapus data, redirect kembali ke mahasiswa.php dengan nid
            header("Location: mahasiswa.php?nid=$nid&status=deleted");
            exit();
        } else {
            echo "Gagal menghapus data: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Gagal menyiapkan statement: " . $conn->error;
    }
} else {
    // Jika parameter ID atau NID tidak ditemukan
    die("Parameter 'id' atau 'nid' tidak ditemukan!");
}
?>
