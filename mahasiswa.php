<?php
// Connection ke database
include './api/koneksi.php'; // Pastikan file ini memiliki koneksi $db

// Ambil data dari tabel dosen
$sql = "SELECT * FROM mahasiswa";
$result = mysqli_query($conn, $sql);

//Mengecek apakah query gagal
if (!$result) {
    die("Error pada query: " . $db->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LeADS UPNVJ</title>
    <!-- Link ke Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link ke CSS eksternal -->
    <link rel="stylesheet" href="oprator.css">
</head>
<body>
  <!-- Navbar -->
  <table class="navbar">
        <tr>
            <td>
            <img src="https://leads.upnvj.ac.id/pluginfile.php/1/theme_edumy/headerlogo1/1644289115/leads%20poppins%20%281%29.png" alt="LeADS">
            </td>
            <td class="dropdown">
                <span class="dropdown-toggle" data-bs-toggle="dropdown">FAKULTAS</span>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Ekonomi dan Bisnis</a></li>
                    <li><a class="dropdown-item" href="#">Kedokteran</a></li>
                    <li><a class="dropdown-item" href="#">Teknik</a></li>
                    <li><a class="dropdown-item" href="#">Ilmu Komputer</a></li>
                </ul>
            </td>
            <td class="dropdown">
                <span class="dropdown-toggle" data-bs-toggle="dropdown">PROGRAM STUDI</span>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Sistem Informasi</a></li>
                    <li><a class="dropdown-item" href="#">Teknik Informatika</a></li>
                    <li><a class="dropdown-item" href="#">Manajemen</a></li>
                    <li><a class="dropdown-item" href="#">Akuntansi</a></li>
                </ul>
            </td>
            <td class="dropdown">
                <span class="dropdown-toggle" data-bs-toggle="dropdown">ANGKATAN</span>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">2020</a></li>
                    <li><a class="dropdown-item" href="#">2021</a></li>
                    <li><a class="dropdown-item" href="#">2022</a></li>
                    <li><a class="dropdown-item" href="#">2023</a></li>
                </ul>
            </td>
            <td class="dropdown">
                <span class="dropdown-toggle" data-bs-toggle="dropdown">BAHASA</span>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Indonesia</a></li>
                    <li><a class="dropdown-item" href="#">English</a></li>
                </ul>
            </td>
        </tr>
    </table>
    <br>
    

    <!-- Kontainer Utama -->
    <div class="container mt-4"> <!-- Area konten utama, dengan margin atas (mt-4) untuk jarak dari atas -->
        <!-- Tombol Add -->
        <div class="add-button">
            <button onclick="window.location.href='add_mahasiswa.php'">Add</button> 
        </div> <!-- Mengarahkan ke halaman add_mahasiswa.php untuk menambahkan data mahasiswa baru -->

        <!-- Daftar Mahasiswa -->
        <?php if ($result->num_rows > 0): ?>
            <table class="nama-list">
                <?php while ($row = $result->fetch_assoc()): ?> <!-- Mengambil setiap baris data dalam bentuk array asosiatif -->
                    <tr>
                        <td><div class="circle"></div></td>
                        <td><span class="nama-tulisan"><?php echo htmlspecialchars($row['nama']); ?></span></td>
                        
                        <td class="delete-cell">
        <!-- Tombol Delete -->
        <a href="delete_mahasiswa.php?id=<?php echo $row['id']; ?>" 
         onclick="return confirm('Yakin ingin menghapus data ini?');" 
         class="btn btn-danger btn-sm">Delete</a> <!-- Mengarahkan ke halaman penghapusan data berdasarkan id -->
        </td>
                    </tr>
                <?php endwhile; ?>
            </table>
        <?php else: ?>
            <p class="text-center mt-4">Tidak ada data mahasiswa.</p>
        <?php endif; ?>
    </div>
</body>
</html>