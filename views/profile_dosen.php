<?php 
// Memulai session
session_start();
include '../api/koneksi.php';
include '../api/verif_dosen.php';
$dsn = $_SESSION['nama'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>PROFILE MAHASISWA</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bimbingan Skripsi</title>
    <link rel="stylesheet" href="../assets/css/pmahasiswa.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Bootsrap -->
</head>

<body>
    <nav>aa</nav>
    <main>
        <div class="kartu">
            <h2>DASHBOARD/PROFILE</h2><br>
            <div class="profil">
                <?php
            $select = mysqli_query($conn, "SELECT * FROM `dosen` WHERE nama = '$dsn'");
            
            if(mysqli_num_rows($select) > 0){
                $fetch = mysqli_fetch_assoc($select);
            }
            if($fetch['profile'] == ''){
                echo '<img src="../assets/uploads/default-profile.jpeg">';
            }else{
                echo '<img src="../assets/uploads/'.$fetch['profile'].'">';
            }
            ?>
        </div>
        <div class="card-body">
            <h3><?php echo $fetch['nid']; ?><span> <?php echo $fetch['nama']; ?></span></h3>
            <form class="row g-3">
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Email</label>
                  <input type="email" readonly class="form-control" id="inputEmail4" value="<?php echo $fetch['email']; ?>">
                </div>
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Fakultas</label>
                  <input type="text" readonly class="form-control" value="<?php echo $fetch['fakultas']; ?>">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Link Gmeet</label>
                  <input type="text" readonly class="form-control" value="<?php echo $fetch['gmeet']; ?>">
                </div>
                <div class="tombol">
                    <a href="../views/update_pdosen.php">
                        <button type="button" class="btn_change">Change</button>
                    </a>
                    <a href="../views/leads_dosen.php">
                        <button type="button" class="btn_back">Back</button>
                    </a>
                </div>
        </div>
    </div>
</main>
</body>
</html>