<?php
include("connection.php");

$error_message = ""; // Menyimpan pesan error jika terjadi kesalahan (contoh: NIM sudah ada atau input kosong)
$success_message = ""; //Menyimpan pesan sukses jika data mahasiswa berhasil ditambahkan.

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Mengecek apakah data dikirim menggunakan metode POST (form dikirimkan)
    // Mengamankan input dari user
    $nama = mysqli_real_escape_string($link, htmlentities(strip_tags(trim($_POST["nama"]))));
    $nim = mysqli_real_escape_string($link, htmlentities(strip_tags(trim($_POST["nim"]))));
    $fakultas = mysqli_real_escape_string($link, htmlentities(strip_tags(trim($_POST["fakultas"]))));
    $prodi = mysqli_real_escape_string($link, htmlentities(strip_tags(trim($_POST["prodi"]))));
    $nid = mysqli_real_escape_string($link, htmlentities(strip_tags(trim($_POST["nid"]))));

    // Validasi input tidak boleh kosong
    if (empty($nama) || empty($nim) || empty($fakultas) || empty($prodi)) {
        $error_message = "Semua field wajib diisi.";
    } else {
        // Cek apakah NIM sudah ada
        $query = "SELECT * FROM mahasiswa WHERE nim='$nim'";
        $result = mysqli_query($link, $query);

        if (mysqli_num_rows($result) > 0) {
            $error_message = "Mahasiswa dengan NIM \"$nim\" sudah ada dalam database.";
        } else {
            // Insert data ke database
            $query = "INSERT INTO mahasiswa (nama, nim, fakultas, prodi, nid) VALUES ('$nama', '$nim', '$fakultas', '$prodi', '$nid')";
            $result = mysqli_query($link, $query);

            if ($result) {
                $success_message = "Mahasiswa \"$nama\" berhasil ditambahkan.";
                // Kosongkan input
                $nama = $nim = $fakultas = $prodi = $nid = "";
            } else {
                $error_message = "Terjadi kesalahan saat menambahkan mahasiswa: " . mysqli_error($link);
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
          crossorigin="anonymous">
          <link rel="stylesheet" href="add.css">
</head>
<body class="bg-light">
    
<header>
    <nav class="navbar">
        <h1>Tambah Mahasiswa</h1>
        <a href="./dosen.php">Kembali</a>
    </nav>
</header>

<section class="container mt-5">
    <!-- Alerts for success or error -->
    <?php if (!empty($error_message)): ?>
        <div class="alert alert-danger"><?php echo $error_message; ?></div> <!-- Menampilkan alert error (dengan kelas alert-danger) jika ada kesalahan -->
    <?php endif; ?>

    <?php if (!empty($success_message)): ?>
        <div class="alert alert-success"><?php echo $success_message; ?></div> <!-- Menampilkan alert sukses (dengan kelas alert-success) jika data berhasil ditambahkan-->
    <?php endif; ?>

    <!-- Form -->
    <form method="POST"> <!-- Form dikirimkan menggunakan metode POST ke file ini sendiri -->
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" id="nama" name="nama" class="form-control" value="<?php echo isset($nama) ? $nama : ''; ?>" required>
        </div>

        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" id="nim" name="nim" class="form-control" value="<?php echo isset($nim) ? $nim : ''; ?>" required>
        </div>

        <div class="mb-3">
            <label for="fakultas" class="form-label">Fakultas</label>
            <input type="text" id="fakultas" name="fakultas" class="form-control" value="<?php echo isset($fakultas) ? $fakultas : ''; ?>" required>
        </div>

        <div class="mb-3">
            <label for="prodi" class="form-label">Program Studi</label>
            <input type="text" id="prodi" name="prodi" class="form-control" value="<?php echo isset($prodi) ? $prodi : ''; ?>" required>
        </div>

        <div class="mb-3">
            <label for="nid" class="form-label">NID</label>
            <input type="text" id="nid" name="nid" class="form-control" value="<?php echo isset($nid) ? $nid : ''; ?>" required>
        </div>

         <!-- VALUE Menampilkan kembali data input jika ada kesalahan -->
         <!-- REQUIRED Input wajib diisi -->

        <button type="submit" class="btn btn-primary">Tambah Mahasiswa</button>
    </form>
</section>

<?php
// Tutup koneksi database
if (isset($link) && $link !== null) {
    mysqli_close($link);
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>
