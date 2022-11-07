<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak{
            width: 30px;
            height: 30px;
            background-color: green;
            margin: 3px;
            text-align: center;
            line-height: 30px;
        transition: 1s;
        float: left;

        }
        .kotak:hover{
            border-radius: 50%;
            transform: rotate(360deg);
        }
        .celar{
            clear: both;
        }
    </style>
</head>
<body>
<?php 
$angka=[
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
 ?>

<?php foreach($angka as $a) : ?>
    <?php foreach($a as $x): ?>
    <div class="kotak"><?php echo $x ?></div>
    <?php endforeach ;?>
    <div class="celar"></div>
    <?php endforeach;?>

    <h1>wow</h1>

    <?php foreach($angka as $a): ?>
        <div class="kotak"><?php echo $a[0] ?></div>
        <div class="kotak"><?php echo $a[1] ?></div>
        <div class="kotak"><?php echo $a[2] ?></div>
        <div class="celar"></div>
        <?php endforeach;?>
</body>
</html>