<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('location:login.php');
    exit();
}
require 'functions.php';
// cek apakah tombol sudah di klik atau belim
if (isset($_POST['submit'])) {
    //   cek apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
    <script>
    alert('data berhasil disimpan');
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
      
    </style>
</head>
<body>

    <h1>tambah data mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">

<ul>
<li>
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama"
        required>
    </li>
    <li>
        <label for="nrp">NRP : </label>
        <input type="text" name="nrp" id="nrp">
    </li>
  
    <li>
        <label for="email">Email : </label>
        <input type="email" name="email" id="email">
    </li>
    <li>
        <label for="jurusan">Jurusan : </label>
        <input type="text" name="jurusan" id="jurusan">
    </li>
    <li>
        <label for="gambar">Gambar : </label>
        <input type="file" name="gambar" id="gambar">
    </li>
    <button type="submit" name="submit">Simpan!</button>
</ul>


    </form>
</body>
</html>