<?php
header("Content-Type: application/json");
$method = $_SERVER['REQUEST_METHOD'];
$host = "localhost";
$username = "root";
$password = "";
$dbname = "b_skripsi";

// Koneksi ke database
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die(json_encode(["error" => "Connection failed: " . $conn->connect_error]));
}

if ($method === "POST") {
    // Pastikan semua field ada di $_POST
    if (!isset($_POST['title']) || !isset($_POST['start_date']) || !isset($_POST['end_date']) || !isset($_POST['description'])) {
        echo json_encode(["error" => "Semua field harus diisi"]);
        exit();
    }

    // Ambil data dari form yang dikirimkan melalui POST
    $title = $_POST['title']; // Judul event
    $start_date = $_POST['start_date']; // Tanggal mulai
    $end_date = $_POST['end_date']; // Tanggal selesai
    $description = $_POST['description']; // Deskripsi

    // Validasi data jika perlu
    if (empty($title) || empty($start_date) || empty($end_date) || empty($description)) {
        echo json_encode(["error" => "Semua field harus diisi"]);
        exit();
    }

    // Menyimpan event baru ke database
    $stmt = $conn->prepare("INSERT INTO events (title, start_date, end_date, description) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $title, $start_date, $end_date, $description);

    if ($stmt->execute()) {
        $_SESSION['message'] = "Jadwal sudah ditambahkan!";
        header("Location: ../views/s_mahasiswa.php");
    } else {
        $_SESSION['message'] = "Terjadi kesalahan saat menambahkan event.";
        header("Location: ../views/s_mahasiswa.php");
    }

    $stmt->close();
}

$conn->close();
?>
