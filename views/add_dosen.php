<?php
include("../api/koneksi.php");

$error_message = "";
$success_message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') { /* Mengecek apakah permintaan yang diterima menggunakan metode POST (form dikirim)*/
    // Mengamankan input dari user
    $nama = mysqli_real_escape_string($link, htmlentities(strip_tags(trim($_POST["nama"]))));
    $nid = mysqli_real_escape_string($link, htmlentities(strip_tags(trim($_POST["nid"]))));
    $fakultas = mysqli_real_escape_string($link, htmlentities(strip_tags(trim($_POST["fakultas"]))));

    // Validasi input tidak boleh kosong
    if (empty($nama) || empty($nid) || empty($fakultas)) {
        $error_message = "Nama dan NID wajib diisi.";
    } else {
        // Cek apakah NID sudah ada
        $query = "SELECT * FROM dosen WHERE nid='$nid'";
        $result = mysqli_query($link, $query);

        if (mysqli_num_rows($result) > 0) {
            $error_message = "Dosen dengan NID \"$nid\" sudah ada dalam database.";
        } else {
            // Insert data ke database
            $query = "INSERT INTO dosen (nama, nid, fakultas) VALUES ('$nama', '$nid', '$fakultas')";
            $result = mysqli_query($link, $query);

            if ($result) {
                $success_message = "Dosen \"$nama\" berhasil ditambahkan.";
                // Kosongkan input
                $nama = $nid = $fakultas = "";
            } else {
                $error_message = "Terjadi kesalahan saat menambahkan dosen: " . mysqli_error($link);
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
          crossorigin="anonymous">
          <link rel="stylesheet" href="add.css"> 
</head>
<body class="bg-light">
    
<header>
    <nav class="navbar">
        <h1>Tambah Dosen</h1>
        <a href="home_dosen.php">Kembali</a> <!-- saat di klik kembali maka akan terlempar ke dosen -->
    </nav>
</header>


<section class="container mt-5">
    <!-- Alerts for success or error -->
    <?php if (!empty($error_message)): ?>
        <div class="alert alert-danger"><?php echo $error_message; ?></div> <!--menampilkan error -->
    <?php endif; ?>

    <?php if (!empty($success_message)): ?>
        <div class="alert alert-success"><?php echo $success_message; ?></div>  <!--menampilkan sukses -->
        <?php endif; ?>

    <!-- Form -->
    <form method="POST"> <!-- Form menggunakan metode POST untuk mengirim data -->
        <div class="mb-3"> <!-- Pengisian form penambahan data -->
            <label for="nama" class="form-label">Nama</label>
            <input type="text" id="nama" name="nama" class="form-control" value="<?php echo isset($nama) ? $nama : ''; ?>" required>
        </div>

        <div class="mb-3">
            <label for="nid" class="form-label">NID</label>
            <input type="text" id="nid" name="nid" class="form-control" value="<?php echo isset($nid) ? $nid : ''; ?>" required>
        </div>

        <div class="mb-3">
            <label for="fakultas" class="form-label">Fakultas</label>
            <input type="text" id="fakultas" name="fakultas" class="form-control" value="<?php echo isset($fakultas) ? $fakultas : ''; ?>" required>
        </div>

        <!-- VALUE Menampilkan kembali data input jika ada kesalahan -->
         <!-- REQUIRED Input wajib diisi -->

        <button type="submit" class="btn btn-primary">Tambah Dosen</button>
    </form> 
</section>


        <?php
        // Tutup koneksi database
        if (isset($link) && $link !== null) {
            mysqli_close($link);
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
</body>
</html>
