<?php
session_start();
include '../api/koneksi.php';
include '../api/verif_mahasiswa.php';

if (isset($_SESSION['message'])) {
  echo "<div class='alert alert-info'>" . $_SESSION['message'] . "</div>";
  unset($_SESSION['message']);  // Hapus pesan setelah ditampilkan
}

// Ambil NID dosen dari session
$dospem = $_SESSION['id_dosen']; // NID dosen pembimbing yang diambil dari session

// Query untuk mengambil data profil dosen berdasarkan NID
$query = "SELECT d.id, d.nama, d.nid, d.fakultas, d.profile 
          FROM dosen d 
          WHERE d.nid = '$dospem'";
$result = mysqli_query($conn, $query);

// Periksa apakah data ditemukan
if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    // Data dosen
    $nama = $row['nama'];
    $nid = $row['nid'];
    $fakultas = $row['fakultas'];
    $profilePath = $row['profile']; // Path profil
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
    <link rel="shortcut icon" href="https://leads.upnvj.ac.id/pluginfile.php/1/theme_edumy/favicon/1644289115/favicon%20leads.png"> <!-- Icon Leads -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Bootsrap -->
    <link rel="stylesheet" type="text/css" href="../assets/css/s_mahasiswa.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!-- Icon pada kalender -->
    <script src="../assets/js/script_kalendar.js" defer></script> <!-- script kalender-->
</head>
<body>
  <nav>
    <a href="../index.php">
      <img src="https://leads.upnvj.ac.id/pluginfile.php/1/theme_edumy/headerlogo1/1644289115/leads%20poppins%20%281%29.png" alt="logo upn">
    </a>
    <button type="button" class="settings btn btn-secondary btn-sm">&#9776</button>
    <a href="">
      <button type="button" class="meeting btn btn-primary btn-sm ">Start Meeting</button>
    </a>
  </nav>
  <aside>
    <div class="profile">
      <img src="../assets/uploads/default-profile.jpeg" alt="Profile Dosen">
    </div>
    <div class="biodata">
      Informations
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

    <!-- Fitur Chat -->
     <div class="chat">
      <p>aaa</p>
      <div id="chat-box">
        <!-- Form untuk mengirim pesan -->
        <form id="chat-form" class="typing">
          <textarea id="message" class="chatbox" rows="3"></textarea><br>
          <button class="send btn btn-primary btn-sm" type="submit">Send</button>
        </form>
      </div>
     </div>
  </main>
</body>
</html>
