<?php
require_once '../api/koneksi.php'; // Sertakan file koneksi

// Direktori upload
$uploadDir = "../assets/uploads";

if (isset($_POST['upload'])) {
    $nid = $_POST['nid']; // Ambil NID dari form
    $nama_file = $_FILES['userfile']['name'];
    $ukuran_file = $_FILES['userfile']['size'];
    $tipe_file = $_FILES['userfile']['type'];
    $tmp_file = $_FILES['userfile']['tmp_name'];

    // Generate nama file unik
    $ekstensi = strrchr($nama_file, '.');
    $nama_file_baru = md5(time()) . $ekstensi;
    $path_file = "uploads/" . $nama_file_baru;

    // Pastikan direktori upload ada
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Pindahkan file
    if (move_uploaded_file($tmp_file, $uploadDir . $nama_file_baru)) {
        // Masukkan data ke tabel profile_logs
        $log_query = "INSERT INTO profile_logs (nid, path, created_at) VALUES ('$nid', '$path_file', NOW())";
        if (mysqli_query($conn, $log_query)) {
            // Perbarui kolom profile di tabel dosen
            $update_query = "UPDATE dosen SET profile = '$path_file' WHERE nid = '$nid'";
            if (mysqli_query($conn, $update_query)) {
                echo "Profil dosen berhasil diperbarui.";
            } else {
                die("Error saat memperbarui kolom profile di tabel dosen: " . mysqli_error($conn));
            }
        } else {
            die("Error saat menyimpan data ke tabel profile_logs: " . mysqli_error($conn));
        }
    } else {
        echo "Upload file gagal.";
    }
}
?>

<!-- Form Upload -->
<form action="" method="POST" enctype="multipart/form-data">
    <label for="nid">NID:</label>
    <input type="text" name="nid" id="nid" required>
    <br>
    <input type="file" name="userfile" required>
    <br>
    <input type="submit" name="upload" value="Upload">
</form>
