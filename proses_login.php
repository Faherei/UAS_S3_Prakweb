<?php
session_start();
include 'api/koneksi.php'; // Pastikan Anda sudah membuat koneksi ke database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek apakah username atau password kosong
    if (empty($username) || empty($password)) {
        $_SESSION['login_error'] = "Username atau Password kosong"; // Simpan pesan kesalahan di session
        header("Location: ../index.php");
        exit();
    }

    // Menghindari SQL Injection dengan Prepared Statements
    $stmt = $conn->prepare("SELECT * FROM mahasiswa WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result_mahasiswa = $stmt->get_result();

    if ($result_mahasiswa->num_rows > 0) {
        $row_mahasiswa = $result_mahasiswa->fetch_assoc();
        
        // Bandingkan password dalam bentuk teks biasa
        if ($password === $row_mahasiswa['password']) {
            session_regenerate_id(true);
            $_SESSION['username'] = $username;
            $_SESSION['nama'] = $row_mahasiswa['nama'];
            $_SESSION['nim'] = $row_mahasiswa['nim'];
            $_SESSION['email'] = $row_mahasiswa['email'];
            $_SESSION['profile'] = $row_mahasiswa['profile'];
            $_SESSION['fakultas'] = $row_mahasiswa['fakultas'];
            $_SESSION['prodi'] = $row_mahasiswa['prodi'];
            $_SESSION['id_dosen'] = $row_mahasiswa['dosenid'];
            $_SESSION['role'] = 'mahasiswa'; // Simpan peran
            header("Location: views/home_mahasiswa.php");
            exit();
        }
    }

    // Cek di tabel dosen
    $stmt = $conn->prepare("SELECT * FROM dosen WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result_dosen = $stmt->get_result();

    if ($result_dosen->num_rows > 0) {
        $row_dosen = $result_dosen->fetch_assoc();
        
        // Bandingkan password dalam bentuk teks biasa
        if ($password === $row_dosen['password']) {
            session_regenerate_id(true);
            $_SESSION['username'] = $username;
            $_SESSION['nama'] = $row_dosen['nama'];
            $_SESSION['role'] = 'dosen'; // Simpan peran
            header("Location: views/home_dosen.php");
            exit();
        }
    }

    // Cek di tabel admin
    $stmt = $conn->prepare("SELECT * FROM admin WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result_admin = $stmt->get_result();

    if ($result_admin->num_rows > 0) {
        $row_admin = $result_admin->fetch_assoc();
        
        // Bandingkan password dalam bentuk teks biasa
        if ($password === $row_admin['password']) {
            session_regenerate_id(true);
            $_SESSION['username'] = $username;
            $_SESSION['nama'] = $row_admin['nama'];
            $_SESSION['role'] = 'admin'; // Simpan peran
            header("Location: views/home_admin.php");
            exit();
        }
    }

    // Jika tidak ada yang cocok, set session untuk notifikasi
    $_SESSION['login_error'] = "Username atau Password salah"; // Simpan pesan kesalahan di session
    header("Location: ../index.php"); // Redirect ke halaman index.php
    exit();
}
?>