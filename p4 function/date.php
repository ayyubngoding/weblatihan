<!-- built-in function -->
<!-- date time 
date
time
mktime
strtotime
-->
<?php
// date untuk menampilkan tanggal dengan format tertentu, minimal ada satu parameter
// echo date("l, d-M-Y");

// time
// unix timestamp
// detik yang telah berlalu sejak 1 january 1970
// echo time();
// echo date("l", time()+60*60*24*1);

// mktime
// membuat sendiri detik, yang memiliki 6 parameter (jam,menit,detik,bulan,tanggal,tahun)
// mktime(0,0,0,0,0,0);
// echo date("l, d-M-Y",mktime(0,0,0,12,12,2001));

// strtotime
// memasukkan format tanggal outputnya detik
// echo date("l,d-M-Y",strtotime("12 december 2001"));

// string
// strline() untuk menghitung panjang dari sebuah string
// strcmp() untuk membandingkan dua buah string
// explode() untuk memecah sebuah string menjadi array
// htmlspecialchars() untuk keamanan

// utility
// var_dump() untuk mengetahui isi/informasi dari sebuah variable
// isset() mrngrcek apakah sebuah variable sudah dibuat atau belum, menghasilkan boolean 
// empty() untuk mengecek sebuah variable kosong atau tidak
// die() untuk memberhentikan program kita, program yang ada dibawahnya gak akan dieksekusi
// sleep() untuk memberhentikan program sementara


?>