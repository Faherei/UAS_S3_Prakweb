<?php 
// Memulai session
session_start();
include '../api/koneksi.php';
include '../api/verif_dosen.php';
?> 

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Setelah Login</title>
</head>
<body>
    <h1>Selamat datang, <?php echo $_SESSION['nama']; ?></h1>
    <h4>Anda berhasil login ke dalam aplikasi.</h4>
    <a href="../logout.php">Logout</a>
</body>
</html>