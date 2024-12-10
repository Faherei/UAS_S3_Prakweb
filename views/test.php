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
    <title>Bimbingan Skripsi</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/test.css">
    <link rel="shortcut icon" href="https://leads.upnvj.ac.id/pluginfile.php/1/theme_edumy/favicon/1644289115/favicon%20leads.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
      <script src="../assets/js/script_kalendar.js" defer></script>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="profile">
                <div class="profilepic">
                <center><img src="
                <?php
                    if ($profilePath == '') {
                        echo '../assets/uploads/default-profile.jpeg';
                    } else {
                        echo '../assets/'.htmlspecialchars($profilePath);
                    }
                ?>" alt="profile dosen"></center>
                <h2><?php echo $nama?></h2>    
            </div>
            </div>
            <!-- KALENDER -->
            <div class="kalender">
                <div class="wrapper">
                    <header>
                        <p class="current-date">December2024</p>
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
        </div>
        <div class="content">
            <div class="navigation">
                <div class="logo">
                    <a href="../index.php">
                        <img src="https://leads.upnvj.ac.id/pluginfile.php/1/theme_edumy/headerlogo1/1644289115/leads%20poppins%20%281%29.png" >
                    </a>
                </div>
                <div class="gmeet" style="border: 1px solid black;">
                    <a href="">
                        <button><i class="fa-sharp-duotone fa-thin fa-user"></i>Start New Meeting</button>
                    </a>
                </div>
            </div>
            <div class="chat">
                <h1>CHATT</h1>
            </div>
        </div>
        </div>
    </div>
</body>
</html>