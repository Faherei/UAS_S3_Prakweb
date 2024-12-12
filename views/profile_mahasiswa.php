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

    <div class="profilecontainer">

        <div class="profile">
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
            <h3><?php echo $fetch['nama']; ?></h3>
            <a href="../views/update_pmahasiswa.php">Update Profile</a>
        </div>

    </div>
    
</body>
</html>