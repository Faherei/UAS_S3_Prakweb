<?php
session_start(); // Pastikan session dimulai di sini
include '../api/koneksi.php';
include '../api/verif_mahasiswa.php';

$nim = $_SESSION['nim'];
// Ambil NID dosen dari session
$dospem = $_SESSION['id_dosen']; // NID dosen pembimbing yang diambil dari session

// Query untuk mengambil data profil dosen berdasarkan NID
$query = "SELECT d.id, d.nama, d.nid, d.fakultas, d.profile, d.gmeet 
          FROM dosen d WHERE d.nid = '$dospem'";
$result = mysqli_query($conn, $query);


// Periksa apakah data ditemukan
if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    // Data dosen
    $nama = $row['nama'];
    $nid = $row['nid'];
    $fakultas = $row['fakultas'];
    $profile = $row['profile']; // Path profil
    $gmeet = $row['gmeet'];
} else {
    die("Data dosen tidak ditemukan.");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bimbingan Skripsi</title>
    <link rel="shortcut icon" href="https://leads.upnvj.ac.id/pluginfile.php/1/theme_edumy/favicon/1644289115/favicon%20leads.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"> <!-- Bootsrap -->
    <link  rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> <!-- Icon pada kalender -->
    <link rel="stylesheet" type="text/css" href="../assets/css/s_mahasiswa.css"> <!-- native style-->
    <script src="../assets/js/script_kalendar.js" defer></script> <!-- script kalender-->
    <script src="../assets/js/script_sidebar.js"></script> <!-- script sidebar -->


</head>
<body>
  <nav>
    <a href="../index.php">
      <img src="https://leads.upnvj.ac.id/pluginfile.php/1/theme_edumy/headerlogo1/1644289115/leads%20poppins%20%281%29.png" alt="logo upn">
    </a>
    <button type="button" class="settings btn btn-secondary btn-sm" onclick="openSidebar()">&#9776;</button> <!-- Tombol untuk membuka sidebar -->
    <a href="<?php echo $gmeet ?>">
      <button type="button" class=" meeting btn btn-primary btn-sm ">Start Meeting</button>
    </a>
  </nav>
  <aside>
    <div class="profile">
    <?php
    if($profile == ''){
        echo '<img src="../assets/uploads/default-profile.jpeg">';
    }else{
        echo '<img src="../assets/uploads/'.$profile.'">';
    }
    ?>
    </div>
    <div class="biodata">
      <h4><?php echo $nama?></h4>
    </div>
    <!-- KALENDER -->
    <div class="kalender">
        <div class="wrapper">
            <header>
                <p class="current-date">December2024</p><br>
                <div class="icons">
                    <span id="prev" class="material-icons">chevron_left</span>
                    <span id="next" class="material-icons">chevron_right</span>
                    </div>
            </header>
          <div class="calendar">
            <ul class="weeks">
              <li>Sun</li>
              <li>Mon</li>
              <li>Tue</li>
              <li>Wed</li>
              <li>Thu</li>
              <li>Fri</li>
              <li>Sat</li>
            </ul>
            <ul class="days"></ul>
        </div>
      </div>
    </div>
  </aside>
  <main>
    <?php 
    // Periksa apakah ada pesan di session dan tampilkan
    if (isset($_SESSION['message'])) {
      echo "<div class='pesan alert alert-info'>" . $_SESSION['message'] . "</div>";
      unset($_SESSION['message']); // Hapus pesan setelah ditampilkan
    }
  ?>
  <script src="../assets/js/script_notif.js"></script>
    <!-- Modal untuk Tambah Event -->
    <div id="event-modal" class="modal">
      <div class="modal-content">
        <form id="event-form" action="../API/server_kalender.php" method="POST">
          <div class="mb-3">
            <input type="text" class="form-control" id="title" name="title" placeholder="Judul" required >
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="start-date" class="form-label">Tanggal Mulai:</label>
              <input type="datetime-local" class="form-control" id="start-date" name="start_date" required>
            </div>
            <div class="col-md-6">
              <label for="end-date" class="form-label">Tanggal Selesai:</label>
              <input type="datetime-local" class="form-control" id="end-date" name="end_date" required>
            </div>
          </div><br>
          <div class="input-group">
            <span class="input-group-text">Deskripsi:</span>
            <textarea class="form-control" aria-label="With textarea" name="description"></textarea>
          </div>
          <button type="submit" class="btn_submit">Submit</button>
          <button type="button" class="close btn_cancel">cancel</button>
        </form>
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
      $query = "SELECT * FROM files WHERE uploader_id = '$nim'";  // Sesuaikan dengan ID atau session yang relevan
      $result = mysqli_query($conn, $query);
      
      if ($result && mysqli_num_rows($result) > 0) {
          echo "<ul>";
          while ($row = mysqli_fetch_assoc($result)) {
              $file_name = $row['file_name'];  // Nama file yang disimpan
              $file_path = "/uploads/" . $row['file_name'];  // Lokasi file di server (pastikan sesuai dengan path yang benar)
              $file_size = $row['file_size'];  // Ukuran file dalam byte
              
              echo "<li>";
              echo "<a href='$file_path' download='$file_path'</a> - " . $file_name . number_format($file_size / 1024, 2) . " KB";
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
  
  <!-- Fitur Chat -->
  <div class="chat">
    <div id="chat-box">
        <!-- Tampilan pesan chat akan muncul di sini -->
      </div>
      
      <!-- Form untuk mengirim pesan -->
      <form id="chat-form" class="typing">
        <textarea id="message" class="chatbox" rows="3" placeholder="Ketik pesan Anda..."></textarea><br>
        <button class="send btn btn-primary btn-sm" type="submit">Send</button>
      </form>
    </div>

  </main>
</body>
</html>