<?php

$conn = mysqli_connect('localhost', 'root', '', 'phpdasar');

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

function tambah($data)
{
    global $conn;
    // ambil data dari tiap element dalam form
    $nama = htmlspecialchars($data['nama']);
    $nrp = htmlspecialchars($data['nrp']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);
    // $gambar = htmlspecialchars($data['gambar']);
    // ipload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }
    // query insert data
    $query = "INSERT INTO mahasiswa
    values('','$nama','$nrp','$email','$jurusan','$gambar')
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload()
{
    $namafile = $_FILES['gambar']['name'];
    $ukuranfile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpname = $_FILES['gambar']['tmp_name'];

    // cek gambar tidak diupload
    if ($error === 4) {
        echo "
        <script>
        alert('pilih gambar');
        </script>
        
        ";
        return false;
    }
    // cek yang di uplod gambar atau tidak
    $ektensigambarvalid = ['jpg', 'jpeg', 'png'];

    $ektensigambar = explode('.', $namafile);
    $ektensigambar = strtolower(end($ektensigambar));
    // cek adakah string didalam array
    if (!in_array($ektensigambar, $ektensigambarvalid)) {
        echo "
        <script>
        alert('yang anda upload bukan gambar');
        </script>
        
        ";

        return false;
    }
    // cek jika ukuran terlalu besar
    if ($ukuranfile > 1000000) {
        echo "
        <script>
        alert('ukuran gambar terlalu besar');
        </script>
        
        ";
        return false;
    }

    // lolos pengecekan , gambar siap di upload
    // generete nama gambar baru
    $namafilebaru = uniqid();
    $namafilebaru .= '.';
    $namafilebaru .= $ektensigambar;

    move_uploaded_file($tmpname, 'img/' . $namafilebaru);

    return $namafilebaru;
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id=$id");
    // mysqli_affected akan mengembalikan nilai min1 jika eror
    // namun jika benar akan mengembalikan nilai lebih dari 0
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;

    // ambil data dari tiap element dalam form
    $id = htmlspecialchars($data['id']);
    $nama = htmlspecialchars($data['nama']);
    $nrp = htmlspecialchars($data['nrp']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $gambarlama = htmlspecialchars($data['gambarlama']);

    // cek apakah user pilih gambar baru
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarlama;
    } else {
        $gambar = upload();
    }

    // query insert data
    $query = "UPDATE  mahasiswa SET
     nama='$nama',
     nrp='$nrp',
     email='$email',
     jurusan='$jurusan',
     gambar='$gambar'
     WHERE id='$id'
     ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($data)
{
    $query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$data%' OR
    nrp LIKE '%$data%'
    
    ";
    return query($query);
}

// function keadaan($capek)
// {
//     if ($capek === 'Menyerah') {
//         echo "jika tidak sanggup menahan lelahnya belajar,
//             maka harus menanggung perihnya kebodohan";
//     } else {
//         echo 'mulailah walapun lelah, pasti akan mendapat manisnya ilmu :) ';
//     }
//     return 'Hadapi Dengan Senyuman :)';
// }

function registrasi($data)
{
    global $conn;
    $username = strtolower(stripslashes($data['username']));
    $password = mysqli_real_escape_string($conn, $data['password']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    // cek username sudah ada atau belum
    $result = mysqli_query(
        $conn,
        "SELECT * FROM user WHERE username='$username'"
    );
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert('username sudah ada')
        </script>";
        return false;
    }

    // cek komfirmasi password
    if ($password !== $password2) {
        echo " 
        <script>
    alert('konfirmasi password tidak sesuai');
        </script>
        ";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan ke database
    $query = "INSERT INTO user VALUES('','$username','$password')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>
