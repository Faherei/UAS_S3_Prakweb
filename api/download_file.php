<?php
// Pastikan file ada dan valid
if (isset($_GET['file'])) {
    $file_path = '../assets/uploads/files/' . basename($_GET['file']);  // Sesuaikan dengan path file Anda

    // Pastikan file ada
    if (file_exists($file_path)) {
        // Set headers untuk mengunduh file
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($file_path) . '"');
        header('Content-Length: ' . filesize($file_path));
        readfile($file_path);
        exit;
    } else {
        echo 'File tidak ditemukan.';
    }
} else {
    echo 'File tidak dispecified.';
}
