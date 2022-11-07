<?php
// apakah $_GET["nama"]sudah pernah dibikin atau belum
// jika ! artinya belum dibikin
if(!isset($_GET["nama"]) || !isset($_GET["nrp"])||!isset($_GET["email"])||!isset($_GET["jurusan"])||!isset($_GET["gambar"])){
    header("Location: latihan2.php");
    exit;
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
            width: 100px;
            height: 100px;
        }
        </style>
</head>
<body>
    <ul>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nrp"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><img src="img/<?php echo $_GET["gambar"]; ?>" alt=""></li>
    </ul>

    <a href="latihan2.php">kembali ke halaman 2</a>
</body>
</html>