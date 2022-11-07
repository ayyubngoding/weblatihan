<?php

// cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST['submit'])) {
    // cek username dan password
    if ($_POST['nama'] == 'labkom' && $_POST['password'] == 'labkom') {
        // jika benar redirect ke halaman admin
        header('Location:admin.php');
    } else {
        echo '<h1>Username / Password Salah</h1>';
        exit();
    }
} ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <style>
        body{
            width: 100vw;
            height: 100vh;
            background-image: linear-gradient(#95EE79,#2DBD6E);
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container{
            width: 350px;
            height: 400px;
            background-color: #ffffff;
            box-shadow: 5px 5px 5px black;
            padding: 40px;
            box-sizing: border-box;
            margin:50px auto;
            border-radius: 5px;
        }
        img{
            width: 100px;
            height: 100px;
        }
        .btn{
            width: 250px;
             background-image: linear-gradient(#95EE79,#2DBD6E);
        }
       
       
    </style>
    <title>Login!</title>
  </head>
  <body>


<div class="container">
    <center><img src="img/unija.jpg" alt="logo"></center>
  <form method="post" action="index.php">
  
    <label for="nama" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-12">
      <input type="name" class="form-control" id="nama" placeholder="name" name="nama">
    </div>
 
  
    <label for="password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-12">
      <input type="password" class="form-control" id="password" placeholder="Password"  name="password">
    </div>

  <br>
    
<center> <button type="submit" name="submit" class="btn">Sign in</button></center>
</form>
</div>


 














    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>