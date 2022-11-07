<?php
// koneksi
// terdapat 4parameter(nama host,username mysql,password,nama databesnya)

$conn=mysqli_connect("localhost","root","","phpdasar");


// ambil data dari tabel di database/query
// terdapat 2parameter(koneksi ke database,query)
$result=mysqli_query($conn,"SELECT * FROM mahasiswa");
// jika benar maka akan menampilkan perintahnya jika salah akan menampilkan nilai boolean false,klo menggunakan vardump
// var_dump($result);

// untuk mengecek eror kita bisa gunakan kondisi
// not result(jika false)
// if(!$esult){
//     echo mysqli_error($conn);
// }


// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() mengembalikan array numeric
// mysqli_fetch_assoc() mengembalikan array assosiative
// mysqli_fetch_array() mengembalikan keduanya
// mysqli_fetch_object() mengembalikan object
// $mhs=mysqli_fetch_object($result);
// var_dump($mhs->nama);

// $mhs=mysqli_fetch_row($result);
// var_dump($mhs);

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
            width: 50px;
            /* height: 50px; */
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
<tr>
    <th>No.Urut</th>
    <th>Aksi</th>
    <th>Gambar</th>
    <th>NRP</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Jurusan</th>
</tr>
<?php $i=1; ?>
<?php while($row =mysqli_fetch_assoc($result)): ?>

<tr>
    <td><?= $i; ?></td>
    <td>
        <a href="">Ubah</a>|
        <a href="">Hapus</a>
    </td>
    <td>
        <img src="img/<?php echo $row["gambar"]; ?>" alt="gambar">
    </td>
    <td><?= $row["nrp"]; ?></td>
    <td><?= $row["nama"]; ?></td>
    <td><?= $row["email"]; ?></td>
    <td><?= $row["jurusan"]; ?></td>
</tr>
<?php $i++ ?>
<?php endwhile; ?>




    </table>
</body>
</html>