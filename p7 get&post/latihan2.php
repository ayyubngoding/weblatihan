<?php
$mahasiswa=[
    [
    "nama"=>"ayyub",
    "nrp"=>"7368273",
    "email"=>"ayyub@gmail.com",
    "jurusan"=>"informatika",
    "gambar"=>"ayyub.jpeg"
    ],
    [
        "nama"=>"dini",
        "nrp"=>"728482483",
        "email"=>"dini@gmail.com",
        "jurusan"=>"informatika",
        "gambar"=>"user.png"
    ]
    ];
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
    <?php foreach($mahasiswa as $mhs): ?>
    <ul>
         <li>
            <a href="latihan3.php?nama=<?=$mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?=$mhs["nama"]; ?></a>
        </li>
    </ul>
        <?php endforeach ?>
</body>
</html>