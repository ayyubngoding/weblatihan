<?php
require 'functions.php';
$com = query('SELECT * FROM tblabkomp');

// tombol cari diklik
if (isset($_POST['cari'])) {
    $com = cari($_POST['keyword']);
}
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
    <h1>Daftar Komputer Labkom </h1>
    <a href="login.php">kembali</a>
    <a href="tambah.php">Tambah Data </a>
    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus autocomplete="off" placeholder="Masukkan Keyword Pencarian..">
        <button type="submit" name="cari">Cari</button>
    </form>
    <br>
    
    <table border="1" cellpadding="15" cellspacing="0">
        <tr>
            <th rowspan="2">No.Urot</th>
            <th rowspan="2">No.Komputer</th>
            <th colspan="6" style="text-align: center;">Kondisi</th>
        </tr>
        <tr>
       
            <th>Monitor</th>
            <th>Keyboard</th>
            <th>Mouse</th>
            <th>Cpu</th>
            <th>UPS</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1; ?>
<?php foreach ($com as $row): ?>

<tr>
    <td><?= $i ?></td>
    <td><?= $row['no_komputer'] ?></td>
    <td><?= $row['monitor'] ?></td>
    <td><?= $row['keyboard'] ?></td>
    <td><?= $row['mouse'] ?></td>
    <td><?= $row['cpu'] ?></td>
    <td><?= $row['ups'] ?></td>
    <td>
        <a href="ubah.php?no_komputer=<?php echo $row[
            'no_komputer'
        ]; ?>">Ubah</a>|
        <a href="hapus.php?no_komputer=<?php echo $row[
            'no_komputer'
        ]; ?>" onclick="return confirm('apakah yakin data akan dihapus?')">Hapus</a>
    </td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>
    </table>
</body>
</html>