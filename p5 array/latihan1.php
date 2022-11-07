<?php
// array adalah variable yang bisa menyimpan banyak tipe data
// array juga pasangan key and value keynya dimulai dari [0]

// membuat array lama
$hari1=array("Jum'at");

// membuat array cara baru
$hari=["senin","selasa","rabu"];

// menampilkan array
// var_dump($hari);
// echo "<br>";
// print_r($hari);
// echo"<br>";
echo $hari[0];
echo"<br>";

// menambah element array
$hari[]="kamis";
print_r($hari);
?>