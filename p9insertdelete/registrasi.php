<?php
require 'functions.php';

if (isset($_POST['register'])) {
    global $conn;
    if (registrasi($_POST) > 0) {
        echo "<script>
        alert('user berhasil ditambahkan');
        </script>";
        header('Location: login.php');
        exit();
    } else {
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
    <title>registrasi</title>
    <style>
        label{
            display: block;
        }
        ul li{
            list-style: none;
        }
        button{
            box-shadow: 1px 1px 2px  rgba(0, 0, 0, 0.5);
       
        }
    </style>
</head>
<body>
    <h1>registrasi</h1>

    <form action="" method="post">
<ul>
    <li>
        <label for="username">username</label>
        <input type="text" name="username" id="username">
    </li>
    <li>
        <label for="password">password</label>
        <input type="password" name="password" id="password">
    </li>
    <li>
        <label for="password2">konfirmasi password</label>
        <input type="password" name="password2" id="password2">
    </li>
    <br>
    <li>
   <button type="submit" name="register">register</button>
    </li>
</ul>
    </form>
</body>
</html>