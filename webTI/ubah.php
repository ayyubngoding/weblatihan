<?php
require 'functions.php';

// ambil data di url
$no = $_GET['no_komputer'];

// query data mhs berdasarkan id
$kom = query("SELECT * FROM tblabkomp WHERE no_komputer=$no")[0];
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
    <title>tambah</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <style>
        .container{
            width: 500px;
            border: 1px solid black;
            padding: 20px;
            box-sizing: border-box;
            margin:50px auto;
        }
    </style>
</head>
<body>
    <h1>edit data</h1>
<div class="container">
  <form method="post" action="">
  <div class="form-group row">
    <label for="nokomputer" class="col-sm-2 col-form-label">No Komputer</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nokomputer"name="no_komputer" value="<?= $kom[
          'no_komputer'
      ] ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="monitor" class="col-sm-2 col-form-label">Monitor</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="monitor" name= "monitor"value="<?= $kom[
          'monitor'
      ] ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="keyboard" class="col-sm-2 col-form-label">Keyboard</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="keyboard" name= "keyboard"value="<?= $kom[
          'keyboard'
      ] ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="mouse" class="col-sm-2 col-form-label">Mouse</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="mouse" name= "mouse"value="<?= $kom[
          'mouse'
      ] ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="cpu" class="col-sm-2 col-form-label">CPU</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="cpu" name= "cpu"value="<?= $kom[
          'cpu'
      ] ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="ups" class="col-sm-2 col-form-label">UPS</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="ups" name= "ups" value="<?= $kom[
          'ups'
      ] ?>">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" name="submit">Edit!</button>
    </div>
  </div>
</body>
</html>