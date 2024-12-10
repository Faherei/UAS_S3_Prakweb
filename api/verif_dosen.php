<?php
// Cek session untuk memeriksa apakah user telah login
if (!isset($_SESSION['username'])) {
    // Jika tidak ada session username, redirect ke halaman index.php
    header("Location: ../index.php");
    exit();
}

if ($_SESSION['role'] !== 'dosen') {
    // Jika role bukan dosen, redirect ke halaman sesuai role mereka
    switch ($_SESSION['role']) {
        case 'mahasiswa':
            header("Location: ./home_mahasiswa.php"); // Ganti dengan halaman mahasiswa
            break;
            case 'admin':
                header("Location: ./home_admin.php"); // Ganti dengan halaman admin
                break;
                default:
                header("Location: ../index.php"); // Jika role tidak dikenali, redirect ke index
                break;
            }
            exit();
        }
?>