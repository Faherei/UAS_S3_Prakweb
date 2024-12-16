<?php 
// Memulai session
session_start();
include '../api/koneksi.php';
include '../api/verif_dosen.php';

$gmeet = $_SESSION['gmeet'];

$mahasiswa_id = isset($_GET['mahasiswa_id']) ? $_GET['mahasiswa_id'] : null;

if ($mahasiswa_id) {
    // Query untuk mendapatkan informasi mahasiswa
    $query = "SELECT nama, nim, prodi, profile FROM Mahasiswa WHERE id = '$mahasiswa_id'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
        $nama_mahasiswa = $data['nama'];
        $nim_mahasiswa = $data['nim'];
        $prodi_mahasiswa = $data['prodi'];
        $foto_mahasiswa = !empty($data['profile']) ? "../assets/uploads/" . $data['profile'] : "../assets/uploads/default_profile.png";
    } else {
        $nama_mahasiswa = "Mahasiswa tidak ditemukan";
        $nim_mahasiswa = "-";
        $prodi_mahasiswa = "-";
        $foto_mahasiswa = "../assets/uploads/default_profile.png";
    }
} else {
    $nama_mahasiswa = "Tidak ada mahasiswa dipilih";
    $nim_mahasiswa = "-";
    $prodi_mahasiswa = "-";
    $foto_mahasiswa = "../assets/uploads/default_profile.png";
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
    <script src="../assets/js/script_sidebar.js"></script>
    <script src="../assets/js/script_kalendar.js"></script>
</head>
<body>
    <div class="sidebar">
        <div style="text-align: center;">
            <img src="<?php echo htmlspecialchars($foto_mahasiswa); ?>" alt="Foto Profil" class="profile-picture">
            <h4>Profil Mahasiswa</h4>
            <p><strong>Nama:</strong> <?php echo htmlspecialchars($nama_mahasiswa); ?></p>
            <p><strong>NIM:</strong> <?php echo htmlspecialchars($nim_mahasiswa); ?></p>
            <p><strong>Jurusan:</strong> <?php echo htmlspecialchars($prodi_mahasiswa); ?></p>
        </div>
    </div>

    <div class="navbar">
    <a href="../index.php">
      <img src="https://leads.upnvj.ac.id/pluginfile.php/1/theme_edumy/headerlogo1/1644289115/leads%20poppins%20%281%29.png" alt="logo upn">
    </a>
        <div>
            <button type="button" class="settings btn btn-secondary btn-sm" onclick="openSidebar()">&#9776;</button>
            <a href="<?php echo $gmeet ?>">
                <button type="button" class="meeting btn btn-primary btn-sm">Start Meeting</button>
            </a>
        </div>
    </div>

     <!-- Sidebar -->
     <div id="sidebar_settings" class="sidebar_settings">
      <button type="button" class="settings btn btn-secondary btn-sm" onclick="closeSidebar()">&#10005;</button>
      <div class="f-list">
        <!-- TEMPAT FILE DI TAMPILKAN -->
      <?php
      // Pastikan session sudah dimulai dan nim tersedia
      
      // Query untuk mengambil file yang sudah ada di database
      $query = "SELECT * FROM files WHERE uploader_id = '$nim_mahasiswa'";  // Sesuaikan dengan ID atau session yang relevan
      $result = mysqli_query($conn, $query);
      
      if ($result && mysqli_num_rows($result) > 0) {
          echo "<ul>";
          while ($row = mysqli_fetch_assoc($result)) {
              $file_name = $row['file_name'];  // Nama file yang disimpan
              $file_path = "/uploads/" . $row['file_name'];  // Lokasi file di server (pastikan sesuai dengan path yang benar)
              $file_size = $row['file_size'];  // Ukuran file dalam byte
              
              echo "<li>";
              echo "<a </a> - " . $file_name . number_format($file_size / 1024, 2) . " KB";
              echo "</li>";
          }
          echo "</ul>";
      } else {
          echo "<p>Tidak ada file yang diunggah.</p>";
      }
      ?>
      <!-- Form untuk Upload File -->
      <div class="f-uploads">
        <form action="../api/upload_file.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <input type="file" name="file" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-primary">Upload</button>
        </form>
      </div>
    </div>
  </div>

    <div class="content">
        <div class="chat-box">
             <!-- Form untuk mengirim pesan -->
      <form id="chat-form" class="typing">
        <textarea id="message" class="chatbox" rows="3" placeholder="Ketik pesan Anda..."></textarea><br>
        <button class="send btn btn-primary btn-sm" type="submit">Send</button>
      </form>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
