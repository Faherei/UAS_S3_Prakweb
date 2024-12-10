<?php
// Cek session untuk memeriksa apakah user telah login
if (!isset($_SESSION['username'])) {
    // Jika tidak ada session username, redirect ke halaman index.php
    header("Location: index.php");
    exit();
}

if ($_SESSION['role'] !== 'admin') {
    // Jika role bukan admin, redirect ke halaman sesuai role mereka
    switch ($_SESSION['role']) {
        case 'dosen':
            header("Location: home_dosen.php"); // Ganti dengan halaman dosen
            break;
            case 'admin':
                header("Location: home_mahasiswa.php"); // Ganti dengan halaman mahasiswa
                break;
                default:
                header("Location: index.php"); // Jika role tidak dikenali, redirect ke index
                break;
            }
            exit();
        }
?>