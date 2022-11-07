<?php
// standar output
// echo,print untuk mencetak isi variable
// print_r biasanya untuk array
// var_dump untuk mengetahui informasi variable
var_dump("hello world");

// penulisan sintax php
// php didalam html
// html didalam php

// variable
// interpolasi untuk mengecek apakah didalam string terdapat variable atau tidak, jika iya yang ditampilkan isi variablenya
// interpolasi berlaku untuk string kutip 2

// operator aritmatika
// + - * /
// $x=10;
// $y=10;
// echo $x+$y;

// penggabung string concat .
// $nama_depan="ayyub";
// $nama_belakang="dini andari";

// echo $nama_depan ." ". $nama_belakang;

// operator assignment
// =,+=,*=,%=,/=,.=,-=
// $x=5;
// $x %=2;
// echo $x;
// $nama="hello";
// $nama .=" ";
// $nama .="ayyub";
// echo $nama;

// operator perbandingan
// ==,<=,>=,!=, <,>
// $x=10;
// $y=11;
// var_dump($x != $y);

// operator identitas
// === !==
// $x="10";
// $y=11;
// var_dump($x === $y);

// operator logika
// &&, ||, !
$x=30;
var_dump($x !== 20);


// $nama="dini jubek";

// echo"hello nama saya $nama";
$nama="dini andari dasuk"
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
    <?php
    echo"halo $nama"
    ?>
</body>
</html>