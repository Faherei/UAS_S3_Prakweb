<?php 
// Memulai session
session_start();
include '../api/koneksi.php';
include '../api/verif_dosen.php';
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bimbingan Skripsi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.6/index.global.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color:#1e1e2f;
        }
        .header {
            background-color: #252549;
            color: white;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .header img {
    height: 50px; /* Atur tinggi gambar sesuai kebutuhan */
    width: auto;  /* Pastikan proporsi gambar tetap terjaga */
    margin-right: 15px; /* Tambahkan jarak dengan teks jika diperlukan */
    object-fit: contain; /* Pastikan gambar tidak terdistorsi */
}

       
        .content {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            padding: 20px;
        }
        .student-list {
            width: 68%;
        }
        .student-item {
            background-color: #2a2a3e;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            color: #dee2e6;
            
        }
        .student-item img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 15px;
        }
        .calendar-container {
            width: 30%;
            background-color: white;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 15px;
        }
        #calendar {
            width: 100%;
        }

        .card {
            width: 100%;
            background-color: #2a2a3e;
            color: white;
            border: none;
            border-radius: 8px;
        }
        .card-body {
            padding: 20px;
        }
        .card-title {
            margin: 0;
        }
        .card .btn {
            margin-left: 10px;
            background-color: #485be3;
            border: none;
            color: white;
        }
        .card .btn-secondary {
            background-color: #e3285f;
        }
        .card .btn:hover {
            opacity: 0.8;
        }

        .h{
            color:#dee2e6;
            margin-left: 15px;
        }

    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <div class="d-flex align-items-center">
            <img src="https://leads.upnvj.ac.id/pluginfile.php/1/theme_edumy/headerlogo1/1644289115/leads%20poppins%20%281%29.png" alt="LeADS">
            <h1 class="ms-3">Bimbingan Skripsi</h1>
        </div>
        <a href="../logout.php" class="btn btn-danger">Logout</a>
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
            $query = "SELECT id, nama FROM mahasiswa";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "
                    <div class='student-item'>
                        <img src='default-profile.png' alt='Profile'>
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
            <div id="calendar"></div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const calendarEl = document.getElementById('calendar');

            const calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: async function (fetchInfo, successCallback, failureCallback) {
                    try {
                        const response = await fetch('calendar.php');
                        const events = await response.json();
                        successCallback(events.map(event => ({
                            id: event.id,
                            title: event.title,
                            start: event.start_date,
                            end: event.end_date,
                            description: event.description,
                        })));
                    } catch (error) {
                        failureCallback(error);
                    }
                },
            });

            calendar.render();
        });
    </script>
</body>
</html>