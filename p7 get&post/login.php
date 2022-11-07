<?php 
// cek apakah tombol submit sudah di tekan atau belum
if(isset($_POST["submit"])){
// cek username dan password
if($_POST["nama"]=="admin" && $_POST["password"]=="123"){
// jika benar redirect ke halaman admin
header("Location:admin.php");
}
else{
    echo "<h1>Username / Password Salah</h1>";
exit;
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
</head>
<body>
    <h1>form login</h1>
    <?php if(isset($eror)): ?>
        <p style="color: red;">Username/Password Salah</p>
        <?php endif; ?>
    <ul>
    <form action="" method="post">

<li>
    <label for="nama">username :</label>
    <input type="text" id="nama" name="nama">
</li>
<li>
    <label for="password">password :</label>
    <input type="password" id="password" name="password">
</li>
<li>
    <button type="submit" name="submit">Kirim!</button>
</li>

    </form>
</ul>
</body>
</html>