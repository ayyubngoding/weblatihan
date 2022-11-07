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
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <?php
$mahasiswa=[
    ["nama"=>"ayyub",
    "npm"=>"737257",
    "prodi"=>"informatika",
    "email"=>"ayyub@gmail.com",
    "gambar"=>"ayyub.jpeg"
    ],
    ["nama"=>"Dini Andari",
    "npm"=>"737257",
    "prodi"=>"informatika",
    "email"=>"ayyub@gmail.com",
    "gambar"=>"user.png"
    ],
    ["nama"=>"Dini",
    "npm"=>"737257",
    "prodi"=>"informatika",
    "email"=>"ayyub@gmail.com",
    "gambar"=>"user1.jpg"
    ]
    ]
    ?>
    <h1>daftar mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs): ?>
        
        <ul>
            <li>
                <img src="img/<?php echo $mhs["gambar"]; ?>" alt="">
            </li>
            <li>Nama : <?php echo $mhs["nama"]; ?></li> 
            <li>Mpm  : <?php echo $mhs["npm"]; ?></li>
            <li>Prodi : <?php echo $mhs["prodi"]; ?></li>
            <li>Email : <?php echo $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
    <h1>cara 2</h1>

    <?php foreach($mahasiswa as $mhs): ?>
        <ul>
            <?php foreach($mhs as $m):?>
            <li><?php echo $m; ?></li> 
            <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>
</body>
</html>