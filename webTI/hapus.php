<?php

require 'functions.php';
$id = $_GET['id'];
if (hapus($id) > 0) {
    echo "
    <script>
    alert('data berhasil hapus');
    document.location.href='index.php';
    </script>
    
    ";
} else {
    echo "
    
    <script>
    alert('gagal');
    document.location.href='index.php';
    </script>
    
    ";
    echo mysqli_error($conn);
}
?>
