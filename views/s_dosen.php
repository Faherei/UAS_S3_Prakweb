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
    <title>Chat dengan <?php echo htmlspecialchars($nama_mahasiswa); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/s_dosen.css">
</head>
<body>
    <div class="sidebar">
        <div style="text-align: center;">
            <div style="width: 80px; height: 80px; border-radius: 50%; background-color: #ccc; margin: 0 auto;"></div>
            <h4>Profile</h4>
            <a href="#">Informationns</a>
        </div>
    </div>

    <div class="navbar">
       
        <img src="https://leads.upnvj.ac.id/pluginfile.php/1/theme_edumy/headerlogo1/1644289115/leads%20poppins%20%281%29.png" alt="LeADS">

        <div>
            <button class="btn btn-primary me-2">Start Meeting</button>
            <button class="btn btn-secondary">Primary</button>
        </div>
    </div>

    <div class="content">
        <div class="chat-box">
            <div class="messages">
                <?php
                // Query to fetch messages
                $query_pesan = "SELECT * FROM pesan WHERE (pengirim_id = ? AND penerima_id = ?) OR (pengirim_id = ? AND penerima_id = ?) ORDER BY waktu ASC";
                
                // Prepare and bind parameters
                $stmt = mysqli_prepare($conn, $query_pesan);
                mysqli_stmt_bind_param($stmt, "iiii", $_SESSION['id'], $mahasiswa_id, $mahasiswa_id, $_SESSION['id']);
                mysqli_stmt_execute($stmt);
                $result_pesan = mysqli_stmt_get_result($stmt);

                if (mysqli_num_rows($result_pesan) > 0) {
                    while ($pesan = mysqli_fetch_assoc($result_pesan)) {
                        $class = $pesan['pengirim_id'] == $_SESSION['id'] ? 'sent' : 'received';
                        echo "<div class='message $class'><p>" . htmlspecialchars($pesan['isi']) . "</p></div>";
                    }
                } else {
                    echo "<p>Belum ada pesan.</p>";
                }
                ?>
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