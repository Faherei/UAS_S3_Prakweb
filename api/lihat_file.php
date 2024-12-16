<?php
session_start();
include '../api/koneksi.php';  // Menghubungkan ke database

// Ambil ID mahasiswa dari session
$mahasiswa_id = $_SESSION['id_mahasiswa'];

// Query untuk mendapatkan daftar file yang diupload oleh mahasiswa tersebut
$query = "SELECT * FROM files WHERE uploader_id = '$mahasiswa_id' AND uploader_type = 'mahasiswa'";
$result = mysqli_query($conn, $query);

// Cek apakah ada file yang diupload
if ($result && mysqli_num_rows($result) > 0) {
    echo "<h3>Daftar File Anda:</h3>";
    echo "<table class='table'>";
    echo "<thead><tr><th>Nama File</th><th>Ukuran File</th><th>Aksi</th></tr></thead><tbody>";
    
    while ($row = mysqli_fetch_assoc($result)) {
        $file_name = $row['file_name'];
        $file_size = $row['file_size'];
        $file_path = $row['file_path'];
        
        // Tampilkan daftar file dengan tombol download
        echo "<tr>
                <td>$file_name</td>
                <td>" . round($file_size / 1024, 2) . " KB</td>
                <td><a href='download_file.php?file_id=" . $row['file_id'] . "' class='btn btn-primary'>Download</a></td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    echo "Tidak ada file yang diupload.";
}
?>
