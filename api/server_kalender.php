<?php
header("Content-Type: application/json");
$method = $_SERVER['REQUEST_METHOD'];
$host = "localhost";
$username = "root";
$password = "";
$dbname = "b_skripsi";

// Koneksi database
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die(json_encode(["error" => "Connection failed: " . $conn->connect_error]));
}

if ($method === "GET") {
    // Mengambil semua event
    $sql = "SELECT * FROM events";
    $result = $conn->query($sql);
    $events = [];
    while ($row = $result->fetch_assoc()) {
        $events[] = $row;
    }
    echo json_encode($events);

} elseif ($method === "POST") {
    // Menambah event baru
    $data = json_decode(file_get_contents("php://input"), true);
    $title = $data['title'];
    $start_date = $data['start_date'];
    $end_date = $data['end_date'];
    $description = $data['description'];
    $sql = "INSERT INTO events (title, start_date, end_date, description) 
            VALUES ('$title', '$start_date', '$end_date', '$description')";
    if ($conn->query($sql)) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["error" => $conn->error]);
    }
}
$conn->close();
?>
