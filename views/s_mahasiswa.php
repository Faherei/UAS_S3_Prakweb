<?php
session_start();
include '../api/koneksi.php';
include '../api/verif_mahasiswa.php';

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
    <link rel="shortcut icon" href="https://leads.upnvj.ac.id/pluginfile.php/1/theme_edumy/favicon/1644289115/favicon%20leads.png">
    <link rel="stylesheet" type="text/css" href="../assets/css/s_mahasiswa.css">
</head>
<body>
  <div class="container">
   <div class="sidebar">
    <table>
      <tr>
        <td>
          <img src="../assets/<?php echo htmlspecialchars($profilePath)?>" alt="profile dosen">
        </td>
      </tr>

      <tr>
        <td>
          <button><?php echo $nama?></button>
        </td>
      </tr>

      <tr class="tall-row">
        <td>
          <!-- <div id="calendar"></div> -->
          <div id="calendar-container">
            <iframe src="./Kalender/kalender.html" style="height: 500px";></iframe>
          </div>
        </td>
      </tr><tr></tr><tr></tr>
    </table>
   </div>
   <div class="main-content">
    <div class="header">
     <div class="title">
      <div class="image-container">
        <a href="../index.php">
            <img src="https://leads.upnvj.ac.id/pluginfile.php/1/theme_edumy/favicon/1644289115/favicon%20leads.png" alt="Logo LeADS UPNVJ" >
        </a>
      </div>
     </div>
     <div class="actions">
      <button>
       Call
      </button>
      <div class="menu">
       ☰
      </div>
     </div>
    </div>
    <div class="chat-box">
    </div>
    <div class="input-box">
     <input placeholder="Type a message" type="text"/>
     <button>
      ▶
     </button>
    </div>
   </div>
  </div>
</body>
</html>
