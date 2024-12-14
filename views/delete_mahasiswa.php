<?php
// Pastikan file ini memiliki koneksi database
include '../api/koneksi.php';

// Periksa apakah ID dikirim melalui URL
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Pastikan ID aman dari SQL Injection

    // Query untuk menghapus data berdasarkan ID
    $query = "DELETE FROM mahasiswa WHERE id = ?"; //Query untuk menghapus data dari tabel dosen berdasarkan id
    $stmt = $conn->prepare($query);

    if ($stmt) {
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            // Berhasil menghapus data, arahkan kembali ke halaman utama
            header("Location: mahasiswa.php?status=deleted");
            exit();
        } else {
            echo "Gagal menghapus data: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Gagal menyiapkan statement: " . $conn->error;
    }
} else {
    echo "ID tidak ditemukan.";
}
?>
