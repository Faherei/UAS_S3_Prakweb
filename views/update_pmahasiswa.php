<?php
    // Memulai session
    session_start();
    include '../api/koneksi.php';
    include '../api/verif_mahasiswa.php';
    $mhs = $_SESSION['nama'];

    if(isset($_POST['update_pmahasiswa'])){

        // $update_nama = mysqli_real_escape_string($conn, $_POST['update_']);
        // mysqli_query($conn, "UPDATE `mahasiswa` SET nama = '$update_nama' WHERE id = 'nama');
        
        $update_profile = $_FILES['update_profile']['name'];
        $update_profile_size = $_FILES['update_profile']['size'];
        $update_profile_tmp_name = $_FILES['update_profile']['tmp_name'];
        $update_profile_folder = '../assets/uploads/'.$update_profile;


        if(!empty($update_profile)){
            if($update_profile_size > 2000000){
                $message[] = 'image is too large';
            }else{
                $profile_update_query = mysqli_query($conn, "UPDATE `mahasiswa` SET profile = '$update_profile' WHERE id = '$mhs'") or die('query failed');
                if($profile_update_query){
                    move_uploaded_file($update_profile_tmp_name, $update_profile_folder);
                }
                $message[] = 'image updated. ';
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name= "viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile Mahasiswa</title>
    <link rel="stylesheet" href="../assets/css/pmahasiswa.css">
</head>
<body>
    <div>
        <?php
            $select = mysqli_query($conn, "SELECT * FROM `mahasiswa` WHERE nama = '$mhs'");
            if(mysqli_num_rows($select) > 0){
                $fetch = mysqli_fetch_assoc($select);
            }
        ?>
    
        <form action="" method="post" enctype="multipart/form-data">
            <?php
                if($fetch['profile'] == ''){
                    echo '<img src="../assets/uploads/default-profile.jpeg">';
                }else{
                        echo '<img src="../assets/uploaded/'.$fetch['profile'].'">';
                }
            
            ?>
            <div>
                <div>
                    <span>Nama : </span>
                    <?php echo $fetch['nama'] ?>
                    <span>NIM : </span>
                    <?php echo $fetch['nim'] ?>
                    <span>Fakultas : </span>
                    <?php echo $fetch['fakultas'] ?>
                    <span>Program Studi : </span>
                    <?php echo $fetch['prodi'] ?>
                    <span>Email : </span>
                    <?php echo $fetch['email'] ?>
                    <span>Update Profile Picture </span>
                    <input type="file" name="update_profile" accept="image/jpg, image/jpeg, image/png">
                </div>
            </div>
            <input type="submit" value="update profile" name="update_pmahasiswa">
            <a href="home_mahasiswa.php">kembali</a>
        </form>
    
    </div>

</body>
</html>