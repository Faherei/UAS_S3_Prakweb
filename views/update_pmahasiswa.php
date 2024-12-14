<?php 
// Memulai session
session_start();
include '../api/koneksi.php';
include '../api/verif_mahasiswa.php';

// Ambil nama mahasiswa dari session
$mhs = $_SESSION['nama'];

// Mengambil data mahasiswa berdasarkan nama yang disimpan di session
$select = mysqli_query($conn, "SELECT * FROM `mahasiswa` WHERE nama = '$mhs'");
if(mysqli_num_rows($select) > 0){
    $fetch = mysqli_fetch_assoc($select);
}

// Proses jika form disubmit
if (isset($_POST['submit'])) {
    $profile = $fetch['profile'];  // Mengambil gambar profil lama

    // Mengupload gambar profil jika ada file yang diunggah
    if ($_FILES['profile']['name'] != '') {
        $target_dir = "../assets/uploads/";
        $target_file = $target_dir . basename($_FILES["profile"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Cek apakah file gambar valid
        if (getimagesize($_FILES["profile"]["tmp_name"])) {
            // Cek jika file sudah ada atau tidak
            if (move_uploaded_file($_FILES["profile"]["tmp_name"], $target_file)) {
                $profile = basename($_FILES["profile"]["name"]);
                
                // Update data profil mahasiswa di database
                $update = mysqli_query($conn, "UPDATE `mahasiswa` SET profile = '$profile' WHERE nim = '{$fetch['nim']}'");

                // Mengecek apakah update berhasil
                if ($update) {
                    $_SESSION['message'] = "Profil berhasil diperbarui.";
                    header('Location: profile_mahasiswa.php'); // Redirect ke halaman profil
                    exit();
                } else {
                    echo "Terjadi kesalahan saat memperbarui gambar profil.";
                }
            } else {
                echo "Maaf, ada kesalahan dalam mengupload file.";
            }
        } else {
            echo "File yang diupload bukan gambar.";
        }
    } else {
        echo "Tidak ada gambar yang diupload.";
    }
}
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
                // Menampilkan gambar profil mahasiswa
                if ($fetch['profile'] == '') {
                    echo '<img src="../assets/uploads/default-profile.jpeg">';
                } else {
                    echo '<img src="../assets/uploads/'.$fetch['profile'].'">';
                }
                ?>
            </div>
            <div class="card-body">
                <h3><?php echo $fetch['nim']; ?><span> <?php echo $fetch['nama']; ?></span></h3>
                <form class="row g-3" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="profile" class="form-label">Masukkan Foto Profile</label>
                        <input class="form-control" type="file" id="profile" name="profile">
                    </div>
                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" readonly class="form-control" id="inputEmail4" value="<?php echo $fetch['email']; ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Fakultas</label>
                        <input type="text" readonly class="form-control" value="<?php echo $fetch['fakultas']; ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Program Studi</label>
                        <input type="text" readonly class="form-control" value="<?php echo $fetch['prodi']; ?>">
                    </div>
                    <div class="tombol">
                        <button type="submit" name="submit" class="btn_change">Update</button>
                        <a href="profile_mahasiswa.php">
                            <button type="button" class="btn_back">Back</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
