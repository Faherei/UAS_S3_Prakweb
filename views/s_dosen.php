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
    <title>Chat dengan <?php echo $nama_mahasiswa; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #1e1e2f;
            color: white;
            font-family: Arial, sans-serif;
        }
        .navbar {
    background-color: #252549;
    padding: 10px 20px;
    margin-left: 250px; /* Tambahkan ini untuk menggeser navbar ke kanan */
}

        .navbar span {
            color: #f8f9fa;
            font-size: 1.5rem;
            font-weight: bold;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #161625;
            padding: 20px;
            position: fixed;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 8px;
            font-size: 1rem;
        }
        .sidebar a:hover {
            background-color: #44446f;
        }
        .content {
            margin-left: 270px;
            padding: 20px;
        }
        .chat-box {
            background-color: #2a2a3e;
            padding: 20px;
            border-radius: 8px;
            height: 90vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .messages {
            overflow-y: auto;
            flex-grow: 1;
            margin-bottom: 20px;
        }
        .message {
            margin-bottom: 15px;
        }
        .message.sent {
            text-align: right;
        }
        .message.received {
            text-align: left;
        }
        .message p {
            display: inline-block;
            padding: 10px 15px;
            border-radius: 20px;
            max-width: 70%;
        }
        .message.sent p {
            background-color: #485be3;
            color: white;
        }
        .message.received p {
            background-color: #44446f;
            color: white;
        }
        .input-box {
            display: flex;
        }
        .input-box input {
            flex-grow: 1;
            padding: 10px;
            border-radius: 8px 0 0 8px;
            border: none;
            outline: none;
        }
        .input-box button {
            background-color: #485be3;
            border: none;
            padding: 10px 20px;
            border-radius: 0 8px 8px 0;
            color: white;
        }
        .input-box button:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="sidebar">
    <div style="text-align: center;">
        <div style="width: 80px; height: 80px; border-radius: 50%; background-color: #ccc; margin: 0 auto;"></div>
        <h4>Profile</h4>
        <a href="#">Information</a>
    </div>
</div>

<div class="navbar">
    <span>LeADS UPNVJ</span>
    <div>
        <button class="btn btn-primary me-2">Call</button>
        <button class="btn btn-secondary">Menu</button>
    </div>
</div>

    <div class="content">
        <div class="chat-box">
            <div class="messages">
                <?php
                // Query untuka mengambil pesan
                $query_pesan = "SELECT * FROM pesan WHERE (pengirim_id = '$_SESSION[id]' AND penerima_id = '$mahasiswa_id') OR (pengirim_id = '$mahasiswa_id' AND penerima_id = '$_SESSION[id]') ORDER BY waktu ASC";
                $result_pesan = mysqli_query($conn, $query_pesan);

                if (mysqli_num_rows($result_pesan) > 0) {
                    while ($pesan = mysqli_fetch_assoc($result_pesan)) {
                        $class = $pesan['pengirim_id'] == $_SESSION['id'] ? 'sent' : 'received';
                        echo "<div class='message $class'><p>{$pesan['isi']}</p></div>";
                    }
                } else {
                    echo "<p>Belum ada pesan.</p>";
                }
                ?>
            </div>
            <form method="POST" action="kirim_pesan.php">
                <div class="input-box">
                    <input type="hidden" name="mahasiswa_id" value="<?php echo $mahasiswa_id; ?>">
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
