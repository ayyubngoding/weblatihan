<?php

$conn = mysqli_connect('localhost', 'root', '', 'dblabkomp');

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function cari($data)
{
    $query = "SELECT * FROM tblabkomp WHERE id LIKE '%$data%' OR
    no_komputer LIKE '%$data%'
    
    ";
    return query($query);
}

function tambah($data)
{
    global $conn;
    // ambil data dari tiap element dalam form
    $no = htmlspecialchars($data['no_komputer']);
    $monitor = htmlspecialchars($data['monitor']);
    $keyboard = htmlspecialchars($data['keyboard']);
    $mouse = htmlspecialchars($data['mouse']);
    $cpu = htmlspecialchars($data['cpu']);
    $ups = htmlspecialchars($data['ups']);

    // query insert data
    $query = "INSERT INTO tblabkomp
    values('','$no','$monitor','$keyboard','$mouse','$cpu','$ups')
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tblabkomp WHERE id=$id");
    // mysqli_affected akan mengembalikan nilai min1 jika eror
    // namun jika benar akan mengembalikan nilai lebih dari 0
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;

    // ambil data dari tiap element dalam form
    $no = htmlspecialchars($data['no_komputer']);
    $monitor = htmlspecialchars($data['monitor']);
    $keyboard = htmlspecialchars($data['keyboard']);
    $mouse = htmlspecialchars($data['mouse']);
    $cpu = htmlspecialchars($data['cpu']);
    $ups = htmlspecialchars($data['ups']);

    // query insert data
    $query = "UPDATE  tblabkomp SET
     monitor='$monitor',
     keyboard='$keyboard',
     mouse='$mouse',
     cpu='$cpu',
     ups='$ups'
     WHERE no_komputer='$no'
     ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>
