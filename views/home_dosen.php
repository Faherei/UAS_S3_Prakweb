<?php 
// Memulai session
session_start();
include '../api/koneksi.php';
include '../api/verif_dosen.php';

$nid = $_SESSION['nid'];
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bimbingan Skripsi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/home_dosen.css">
    <script src="../assets/js/script_kalendar.js" defer></script>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <div class="d-flex align-items-center">
            <a href="leads_dosen.php">  
                <img src="https://leads.upnvj.ac.id/pluginfile.php/1/theme_edumy/headerlogo1/1644289115/leads%20poppins%20%281%29.png" alt="LeADS">
            </a>
            <h1 class="ms-3">Bimbingan Skripsi</h1>
        </div>
        <a href="leads_dosen.php" class="btn btn-danger">Kembali</a>
    </div>
    
    <div class="h">
     <h1>Selamat Datang, <?php echo $_SESSION['nama']; ?>!</h1>
     <h4>Berikut adalah daftar mahasiswa bimbingan Anda:</h4>
    </div>

    <!-- Content -->
    <div class="content">
        <!-- Student List -->
        <div class="student-list">
            <?php
            // Query untuk mengambil data mahasiswa
            $query = "SELECT id, nama FROM mahasiswa WHERE dosenid = '$nid'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "
       <div class='student-item'>
    <img src='../assets/uploads/SANDYA KARSA FINAL.png' alt='Profile'>
    <div>
                <h5>{$row['nama']}</h5>
                <p>ID: {$row['id']}</p>
            </div>
            <div class='card'>
                <div class='card-body'>
                    <div class='d-flex justify-content-end align-items-center gap-2'>
                        <a href='s_dosen.php?mahasiswa_id={$row['id']}' class='btn btn-primary'>Chat</a>
                    </div>
                </div>
            </div>
        </div>";
    }
} else {
    echo "<p>Belum ada mahasiswa bimbingan.</p>";
}
            ?>
        </div>

        <!-- Calendar -->
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
    </div>
    

</body>
</html>