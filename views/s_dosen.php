<?php 
// Memulai session
session_start();
include '../api/koneksi.php';
include '../api/verif_dosen.php';

$gmeet = $_SESSION['gmeet'];

$mahasiswa_id = isset($_GET['mahasiswa_id']) ? $_GET['mahasiswa_id'] : null;

if ($mahasiswa_id) {
    // Query untuk mendapatkan informasi mahasiswa
    $query = "SELECT nama, nim, prodi FROM Mahasiswa WHERE id = '$mahasiswa_id'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
        $nama_mahasiswa = $data['nama'];
        $nim_mahasiswa = $data['nim'];
        $prodi_mahasiswa = $data['prodi'];
    } else {
        $nama_mahasiswa = "Mahasiswa tidak ditemukan";
        $nim_mahasiswa = "-";
        $prodi_mahasiswa = "-";
    }
} else {
    $nama_mahasiswa = "Tidak ada mahasiswa dipilih";
    $nim_mahasiswa = "-";
    $prodi_mahasiswa = "-";
}

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat dengan <?php echo htmlspecialchars($nama_mahasiswa); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/s_dosen.css">
    <script src="../assets/js/script_sidebar.js"></script> <!-- script sidebar -->
</head>
<body>
    <div class="sidebar">
        <div style="text-align: center;">
            <div style="width: 80px; height: 80px; border-radius: 50%; background-color: #ccc; margin: 0 auto;"></div>
            <h4>Profile</h4>
            <p><strong>Nama:</strong> <?php echo htmlspecialchars($nama_mahasiswa); ?></p>
            <p><strong>NIM:</strong> <?php echo htmlspecialchars($nim_mahasiswa); ?></p>
            <p><strong>Jurusan:</strong> <?php echo htmlspecialchars($prodi_mahasiswa); ?></p>
        </div>
    </div>

    <div class="navbar">
       
        <img src="https://leads.upnvj.ac.id/pluginfile.php/1/theme_edumy/headerlogo1/1644289115/leads%20poppins%20%281%29.png" alt="LeADS">
        
        <div>
            <button type="button" class="settings btn btn-secondary btn-sm" onclick="openSidebar()">&#9776;</button>
            <a href="<?php echo $gmeet ?>">
      <button type="button" class="meeting btn btn-primary btn-sm ">Start Meeting</button>
    </a>

        </div>

        <!-- Sidebar -->
    <div id="sidebar_settings" class="sidebar_settings">
    <button type="button" class="settings btn btn-secondary btn-sm" onclick="closeSidebar()">&#10005;</button>
        <ul>
            <li><a href="#">Profiles</a></li>
            <li><a href="#">Settingss</a></li>
            <li><a href="#">Logouts</a></li>
        </ul>
    </div>
    </div>

    <div class="content">
        <div class="chat-box">
            <div class="messages">
                
            </div>
            <form method="POST" action="kirim_pesan.php">
                <div class="input-box">
                    <input type="hidden" name="mahasiswa_id" value="<?php echo htmlspecialchars($mahasiswa_id); ?>">
                    <input type="text" name="pesan" placeholder="Tulis pesan..." required>
                    <button type="submit">Kirim</button>
                    <a href="home_dosen.php" class="btn btn-danger ms-auto">Kembali</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>