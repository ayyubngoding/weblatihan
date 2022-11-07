<?php

$mahasiswa=[
    ["Ayyub","720520012","informatika","ayyub@gmail.com"],
    ["Dini Andari","720520012","informatika","dini@gmail.com"],
    ["Andi","720520012","informatika","andi@gmail.com"]
];

$mahasiswa1=["Ayyub","72483535","salosa"];

var_dump($mahasiswa);

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
    <h1>Daftar Mahasiswa</h1>
    <!-- mengunakan foreach -->
    <?php foreach($mahasiswa as $mhs): ?>
    <ul>
        <li><?php echo $mhs[0] ?> </li>
        <li><?php echo $mhs[1] ?> </li>
        <li><?php echo $mhs[2] ?> </li>
        <li><?php echo $mhs[3] ?> </li>
    </ul>
    <?php endforeach ?>

    <!-- menggunakan for -->
    <?php for($i = 0; $i < 2; $i++): ?>
        <ul>
            <li><?php echo $mahasiswa[$i][0]; ?></li>
            <li><?php echo $mahasiswa[$i][1]; ?></li>
            <li><?php echo $mahasiswa[$i][2]; ?></li>
            <li><?php echo $mahasiswa[$i][3]; ?></li>
        </ul>
        <?php endfor ?>
    
<h6>ini foreach</h6>
<?php foreach($mahasiswa as $mhs): ?>
<ul>
    <?php foreach($mhs as $a): ?>
        <li><?php echo $a; ?></li>
        <?php endforeach ?>
</ul>
 <?php endforeach; ?>

 <?php foreach($mahasiswa1 as $mh): ?>
            <li><?php echo $mh ?></li>
            <?php endforeach ?>
            </ul>

        
</body>
</html>