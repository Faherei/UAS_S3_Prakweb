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
        <div class="calendar-container">
            <div class="wrapper">
                <header>
                    <p class="current-date">December 2024</p><br>
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

    <script>
        const daysTag = document.querySelector(".days"),
        currentDate = document.querySelector(".current-date"),
        prevNextIcon = document.querySelectorAll(".icons span");

        let date = new Date(),
        currYear = date.getFullYear(),
        currMonth = date.getMonth();

        const months = ["January", "February", "March", "April", "May", "June", "July",
                        "August", "September", "October", "November", "December"];

        const renderCalendar = () => {
            let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(),
                lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(),
                lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(),
                lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate();

            let liTag = "";

            for (let i = firstDayofMonth; i > 0; i--) {
                liTag += `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;
            }

            for (let i = 1; i <= lastDateofMonth; i++) {
                let dateStr = `${currYear}-${String(currMonth + 1).padStart(2, '0')}-${String(i).padStart(2, '0')}`;
                let isToday = i === date.getDate() && currMonth === new Date().getMonth()
                            && currYear === new Date().getFullYear() ? "active" : "";

                liTag += `<li class="${isToday}" data-date="${dateStr}">${i}</li>`;
            }

            for (let i = lastDayofMonth; i < 6; i++) {
                liTag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`;
            }
            currentDate.innerText = `${months[currMonth]} ${currYear}`;
            daysTag.innerHTML = liTag;
        };

        renderCalendar();

        prevNextIcon.forEach(icon => {
            icon.addEventListener("click", () => {
                currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;

                if (currMonth < 0 || currMonth > 11) {
                    date = new Date(currYear, currMonth, new Date().getDate());
                    currYear = date.getFullYear();
                    currMonth = date.getMonth();
                } else {
                    date = new Date();
                }
                renderCalendar();
            });
        });
    </script>
</body>
</html>