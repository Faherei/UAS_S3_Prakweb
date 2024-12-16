<?php
session_start();
include '../api/koneksi.php';  // Menghubungkan ke database

$nim = $_SESSION['nim'];

// Periksa apakah file telah diunggah
if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
    // Ambil informasi file yang diunggah
    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    
    // Tentukan direktori tempat menyimpan file di server
    $upload_dir = "../assets/uploads/files/";
    $file_path = $upload_dir . basename($file_name);

    // Cek apakah file sudah ada di server
    if (file_exists($file_path)) {
        $_SESSION['message'] = "File sudah ada. Silakan ubah nama file dan coba lagi.";
    } else {
        // Pindahkan file ke direktori tujuan
        if (move_uploaded_file($file_tmp, $file_path)) {
            // Tentukan tipe pengupload (mahasiswa)
            $uploader_type = 'mahasiswa';
            
            // Query untuk menyimpan informasi file ke database
            $query = "INSERT INTO files (file_name, file_size, file_type, file_path, uploader_id, uploader_type)
                      VALUES ('$file_name', '$file_size', '$file_type', '$file_path', '$nim', '$uploader_type')";
            
            // Eksekusi query
            if (mysqli_query($conn, $query)) {
                $_SESSION['message'] = "File berhasil diupload dan disimpan di database.";
            } else {
                $_SESSION['message'] = "Gagal menyimpan data file di database: " . mysqli_error($conn);
            }
        } else {
            $_SESSION['message'] = "Gagal mengunggah file.";
        }
    }
} else {
    $_SESSION['message'] = "Tidak ada file yang diunggah atau terjadi kesalahan pada pengunggahan.";
}

header('Location: ../views/s_mahasiswa.php'); // Redirect kembali ke halaman mahasiswa
exit();
?>
