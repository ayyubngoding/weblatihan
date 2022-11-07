<?php
session_start();
// if(!isset($_SESSION["login"]))
if (isset($_SESSION['login'])) {
} else {
    header('Location:login.php');
    exit();
}
require 'functions.php';

// jumlahhalaman=totaldata/jumlahdataperhalaman
$jumlahDataPerHalaman = 3;
// $result = mysqli_query($conn, 'SELECT * FROM mahasiswa');
$jumlahData = count(query('SELECT * FROM mahasiswa'));

// round()membulatkan bilangan pecahan ke desimal terdekatnya
// floor()membulatkan kebawah
// ceil()membulatkan keatas
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = isset($_GET['halaman']) ? $_GET['halaman'] : 1;
// halaman =2, awaldata= 3
$awalData = $jumlahDataPerHalaman * $halamanAktif - $jumlahDataPerHalaman;

$mahasiswa = query('SELECT * FROM mahasiswa LIMIT 1,$jumlahDataPerHalaman');
// $mahasiswa = query('SELECT * FROM mahasiswa');

// tombol cari diklik
if (isset($_POST['cari'])) {
    $mahasiswa = cari($_POST['keyword']);
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
            width: 50px;
            /* height: 50px; */
        }
    </style>
</head>
<body>
  <a href="logout.php">
  <button type="submit">Logout</button>
  </a>
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus autocomplete="off" placeholder="Masukkan Keyword Pencarian..">
        <button type="submit" name="cari">Cari</button>
    </form>
    <!-- navigasi -->

    <!-- <?php if ($halamanAktif > 1): ?>
        <a href="?halaman<?= $halamanAktif - 1 ?>">&laquo;</a>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $jumlahHalaman; $i++): ?>
            <?php if ($i === $halamanAktif): ?>
                <a style="font-weight: bold;color:red;" href="?halaman<?= $i ?>"><?= $i ?></a>
                <?php else: ?>
                    <a href="?halaman<?= $i ?>"><?= $i ?></a>
                    <?php endif; ?>
                    <?php endfor; ?>

                    <?php if ($halamanAktif < $jumlahHalaman): ?>
                        <a href="?halaman<?= $halamanAktif + 1 ?>">&raquo;</a>
                        <?php endif; ?> -->
                    
                    
    <br>

    <table border="1" cellpadding="10" cellspacing="0">
<tr>
    <th>No.Urut</th>
    <th>Aksi</th>
    <th>Gambar</th>
    <th>NAMA</th>
    <th>NRP</th>
    <th>Email</th>
    <th>Jurusan</th>
</tr>
<?php $i = 1; ?>
<?php foreach ($mahasiswa as $row): ?>

<tr>
    <td><?= $i ?></td>
    <td>
        <a href="ubah.php?id=<?php echo $row['id']; ?>">Ubah</a>|
        <a href="hapus.php?id=<?php echo $row[
            'id'
        ]; ?>" onclick="return confirm('apakah yakin data akan dihapus?')">Hapus</a>
    </td>
    <td>
        <img src="img/<?php echo $row['gambar']; ?>" alt="gambar">
    </td>
    <td><?= $row['nama'] ?></td>
    <td><?= $row['nrp'] ?></td>
    <td><?= $row['email'] ?></td>
    <td><?= $row['jurusan'] ?></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>




    </table>
</body>
</html>