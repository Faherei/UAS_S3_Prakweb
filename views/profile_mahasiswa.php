<?php 
// Memulai session
session_start();
include '../api/koneksi.php';
include '../api/verif_mahasiswa.php';
$mhs = $_SESSION['nama'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>PROFILE MAHASISWA</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bimbingan Skripsi</title>
    <link rel="stylesheet" href="../assets/css/pmahasiswa.css">
</head>

<body>
    <nav>aa</nav>
    <main>
        <div class="card">
            <div class="profil">
                <?php
            $select = mysqli_query($conn, "SELECT * FROM `mahasiswa` WHERE nama = '$mhs'");
            if(mysqli_num_rows($select) > 0){
                $fetch = mysqli_fetch_assoc($select);
            }
            if($fetch['profile'] == ''){
                echo '<img src="../assets/uploads/default-profile.jpeg">';
            }else{
                echo '<img src="../assets/uploaded/'.$fetch['profile'].'">';
            }
            ?>
        </div>
        <div class="card-body">
            <h3><?php echo $fetch['nama']; ?></h3>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="../views/update_pmahasiswa.php">
                <button type="submit" class="btn_submit">Change</button>
            </a>
            <button type="button" class="close btn_cancel">Back</button>
        </div>
    </div>
</main>
</body>
</html>