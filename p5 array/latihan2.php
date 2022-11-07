<?php
$mahasiswa=[1,2,3,4,5,6,7];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak{
            width: 50px;
            height: 50px;
            background-color: salmon;
            float: left;
            margin: 2px;
            text-align: center;
            line-height: 50px;
        }
        .cle{
            clear: both;
        }
    </style>
</head>
<body>
    <?php foreach($mahasiswa as $mhs): ?>
    <div class="kotak"><?php echo $mhs ?></div>
    <?php endforeach ?>
    <div class="cle"></div>

    <?php for($i = 0; $i < count($mahasiswa); $i++): ?>
        <div class="kotak"><?php echo $mahasiswa[$i]; ?></div>
        <?php endfor?>
</body>
</html>