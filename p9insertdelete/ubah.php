<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('location:login.php');
    exit();
}
require 'functions.php';

// ambil data di url
$id = $_GET['id'];

// query data mhs berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id=$id")[0];
// cek apakah tombol sudah di klik atau belum
if (isset($_POST['submit'])) {
    //   cek apakah data berhasil ditambahkan atau tidak
    if (ubah($_POST) > 0) {
        echo "
    <script>
    alert('data berhasil di ubah');
    document.location.href='index.php';
    </script>
    
    ";
    } else {
        echo "
    
    <script>
    alert('gagal');
    </script>
    
    ";
        echo mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
img{
    width: 50px;

}
    </style>
</head>

<body>

    <h1>
        edit data mahasiswa
    </h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs['id'] ?>">
        <input type="hidden" name="gambarlama" value="<?= $mhs['gambar'] ?>">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs[
                    'nama'
                ] ?>">
            </li>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp" value="<?= $mhs[
                    'nrp'
                ] ?>">
            </li>

            <li>
                <label for="email">Email : </label>
                <input type="email" name="email" id="email" value="<?= $mhs[
                    'email'
                ] ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $mhs[
                    'jurusan'
                ] ?>">
            </li>
            <li>
                
                <label for="gambar">Gambar : </label><br>
                <img src="img/<?= $mhs['gambar'] ?>" alt=""><br>
                <input type="file" name="gambar" id="gambar" >
            </li>
            <button type="submit" name="submit">edit!</button>
        </ul>


    </form>
</body>

</html>