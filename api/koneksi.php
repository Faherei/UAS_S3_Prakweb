<?php
$host = "localhost"; // Host database, biasanya localhost
$user = "root"; // Username database, defaultnya 'root' untuk XAMPP
$pass = ""; // Password database, defaultnya kosong untuk XAMPP
$dbname = "b_skripsi"; // Nama database yang telah dibuat

// Membuat koneksi
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>