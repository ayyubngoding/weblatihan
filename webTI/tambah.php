<?php
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
<div class="container">
  <form method="post" action="">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">No Komputer</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputname3"name="no_komputer">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Monitor</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" name= "monitor">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Keyboard</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" name= "keyboard">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Mouse</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" name= "mouse">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">CPU</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" name= "cpu">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">UPS</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" name= "ups">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" name="submit">Simpan!</button>
    </div>
  </div>
</body>
</html>
