<?php
include("../api/koneksi.php");

$error_message = ""; // Menyimpan pesan error jika terjadi kesalahan (contoh: NIM sudah ada atau input kosong)
$success_message = ""; //Menyimpan pesan sukses jika data mahasiswa berhasil ditambahkan.

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Mengecek apakah data dikirim menggunakan metode POST (form dikirimkan)
    // Mengamankan input dari user
   // Mengamankan input dari user
$id = isset($_POST['id']) ? mysqli_real_escape_string($conn, htmlentities(strip_tags(trim($_POST["id"])))) : "";
$nama = isset($_POST['nama']) ? mysqli_real_escape_string($conn, htmlentities(strip_tags(trim($_POST["nama"])))) : "";
$nim = isset($_POST['nim']) ? mysqli_real_escape_string($conn, htmlentities(strip_tags(trim($_POST["nim"])))) : "";
$fakultas = isset($_POST['fakultas']) ? mysqli_real_escape_string($conn, htmlentities(strip_tags(trim($_POST["fakultas"])))) : "";
$prodi = isset($_POST['prodi']) ? mysqli_real_escape_string($conn, htmlentities(strip_tags(trim($_POST["prodi"])))) : "";
$email = isset($_POST['email']) ? mysqli_real_escape_string($conn, htmlentities(strip_tags(trim($_POST["email"])))) : "";
$username = isset($_POST['username']) ? mysqli_real_escape_string($conn, htmlentities(strip_tags(trim($_POST["username"])))) : "";
$password = isset($_POST['password']) ? mysqli_real_escape_string($conn, htmlentities(strip_tags(trim($_POST["password"])))) : "";
$dosenid = isset($_POST['dosenid']) ? mysqli_real_escape_string($conn, htmlentities(strip_tags(trim($_POST["dosenid"])))) : "";
$nid = $_SESSION['nid'];

    // Validasi input tidak boleh kosong
    if (empty($id) || empty($nama) || empty($nim) || empty($fakultas) || empty($prodi) || empty($email) || empty($username) || empty($password) || empty($dosenid)) {
        $error_message = "Semua field wajib diisi.";
    } else {
        // Cek apakah NIM sudah ada
        $query = "SELECT * FROM mahasiswa WHERE nim='$nim'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            $error_message = "Mahasiswa dengan NIM \"$nim\" sudah ada dalam database.";
        } else {
            // Insert data ke database
            $query = "INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `fakultas`, `prodi`, `email`, `username`, `password`, `dosenid`) VALUES
            ($id, '$nama', '$nim', '$fakultas', '$prodi', '$email', '$username', '$password', '$dosenid')";
            $result = mysqli_query($conn, $query);

            if ($result) {
                $success_message = "Mahasiswa \"$nama\" berhasil ditambahkan.";
                // Kosongkan input
                $id = $nama = $nim = $fakultas = $prodi = $email = $username = $password = $dosenid = "";
            } else {
                $error_message = "Terjadi kesalahan saat menambahkan mahasiswa: " . mysqli_error($conn);
            }
        }
    }
}

// Ambil NID dosen dari URL
$nid1 = isset($_GET['nid']) ? $_GET['nid'] : '';

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
          <link rel="stylesheet" href="../assets/css/tambah.css">
</head>
<body class="bg-dark">
    
<header>
    <nav class="navbar">
        <h1>Tambah Mahasiswa</h1>
        <button class="btn btn-primary" onclick="window.location.href='home_admin.php'">Kembali</button>
    </nav>
</header>

<section class="container mt-5">
    <!-- Alerts for success or error -->
    <?php if (!empty($error_message)): ?>
        <div class="alert alert-danger"><?php echo $error_message; ?></div> <!-- Menampilkan alert error (dengan kelas alert-danger) jika ada kesalahan -->
    <?php endif; ?>

    <?php if (!empty($success_messsage)): ?>
        <div class="alert alert-success"><?php echo $success_message; ?></div> <!-- Menampilkan alert sukses (dengan kelas alert-success) jika data berhasil ditambahkan-->
    <?php endif; ?>

    <!-- Form -->
    <form method="POST"> <!-- Form dikirimkan menggunakan metode POST ke file ini sendiri -->
       <div class="mb-3">
    <label for="id" class="form-label">ID</label>
    <input type="text" id="id" name="id" class="form-control" value="<?php echo isset($id) ? $id : ''; ?>" required>
</div>

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
    <label for="email" class="form-label">Email</label>
    <input type="email" id="email" name="email" class="form-control" value="<?php echo isset($email) ? $email : ''; ?>" required>
</div>

<div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" id="username" name="username" class="form-control" value="<?php echo isset($username) ? $username : ''; ?>" required>
</div>

<div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" id="password" name="password" class="form-control" value="<?php echo isset($password) ? $password : ''; ?>" required>
</div>

<div class="mb-3">
    <label for="dosenid" class="form-label">Dosen ID</label>
    <input type="text" id="dosenid" name="dosenid" class="form-control" value="<?php echo isset($dosenid) ? $dosenid : ''; ?>" required>
</div>


         <!-- VALUE Menampilkan kembali data input jika ada kesalahan -->
         <!-- REQUIRED Input wajib diisi -->

        <button type="submit" class="btn btn-primary">Tambah Mahasiswa</button>
    </form>
</section>

<?php
// Tutup koneksi database
if (isset($conn) && $conn !== null) {
    mysqli_close($conn);
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>
