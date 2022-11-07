<?php
session_start();
require 'functions.php';

// cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];
    // ambil username berdasarkan id
    $result = mysqli_query($conn, "SELECT username FROM user WHERE id=$id");

    $row = mysqli_fetch_assoc($result);
    // cek cookie dan username
    if ($key === hash('sha256', $row['username'])) {
        $_SESSION['login'] = true;
    }
}

if (isset($_SESSION['login'])) {
    header('Location:index.php');
    exit();
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query(
        $conn,
        "SELECT * FROM user WHERE username='$username'"
    );

    // cek username yg ada didatabase apakah sama dengan yg di login
    // mysqli_num_rows() mengembalikan nilai yg ada pada $result klo ada nilainya 1 klo tidak ada 0
    if (mysqli_num_rows($result) === 1) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        // password_verify ngecek sebuah string apakah sama dengan hashnya,ada dua parameter yg pertama string yang belum diacak , kedua string yang sudah diacak
        if (password_verify($password, $row['password'])) {
            // set sesion
            $_SESSION['login'] = true;

            // cek remember me
            if (isset($_POST['remember'])) {
                // buat cookie
                setcookie('id', $row['id'], time() + 60);
                setcookie('key', hash('sha256', $row['username']), time() + 60);
            }
            header('Location: index.php');
            exit();
        }
    }
    $error = true;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <a href="registrasi.php">Sign Up</a>
    <h1>login</h1>

<?php if (isset($error)): ?>
    <p>Username?Password Salah!</p>
    <?php endif; ?>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username :</label>
                <input type="text" id="username" name="username">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" id="password" name="password">
            </li>
            <li>
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember me</label>
            </li>
            <br>
            <li>
                <button type="submit" name="login">LOGIN</button>
            </li>
        </ul>
    </form>
</body>
</html>