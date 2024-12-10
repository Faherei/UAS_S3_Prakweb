<?php
require_once '../api/koneksi.php'; // Sertakan file koneksi

// Direktori upload
$uploadDir = "uploads/";

if (isset($_POST['upload'])) {
    $nim = $_POST['nim']; // Ambil NIM dari form
    $nama_file = $_FILES['userfile']['name'];
    $ukuran_file = $_FILES['userfile']['size'];
    $tipe_file = $_FILES['userfile']['type'];
    $tmp_file = $_FILES['userfile']['tmp_name'];

    // Generate nama file unik
    $ekstensi = strrchr($nama_file, '.');
    $nama_file_baru = md5(time()) . $ekstensi;
    $path_file = $uploadDir . $nama_file_baru;

    // Pastikan direktori upload ada
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Pindahkan file
    if (move_uploaded_file($tmp_file, $path_file)) {
        // Masukkan data ke tabel profile_logs
        $log_query = "INSERT INTO profile_logs (nim, action, path) VALUES ('$nim', 'upload', '$path_file')";
        if (mysqli_query($conn, $log_query)) {
            // Perbarui kolom profile di tabel mahasiswa
            $update_query = "UPDATE mahasiswa SET profile = '$path_file' WHERE nim = '$nim'";
            if (mysqli_query($conn, $update_query)) {
                echo "Profil berhasil diperbarui.";
            } else {
                die("Error saat memperbarui profile di tabel mahasiswa: " . mysqli_error($conn));
            }
        } else {
            die("Error saat menyimpan data ke profile_logs: " . mysqli_error($conn));
        }
    } else {
        echo "Upload file gagal.";
    }
}
?>

<!-- Form Upload -->
<form action="" method="POST" enctype="multipart/form-data">
    <label for="nim">NIM:</label>
    <input type="text" name="nim" id="nim" required>
    <br>
    <input type="file" name="userfile" required>
    <br>
    <input type="submit" name="upload" value="Upload">
</form>
