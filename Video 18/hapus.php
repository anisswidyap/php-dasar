<?php

$conn = mysqli_connect("localhost", "root","", "phpdasar");
require 'functions.php';



session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}




// Ambil ID yang diteruskan melalui URL
$id = $_GET["id"];

// Cek apakah data berhasil dihapus
if( hapus($id) > 0 ) {
    echo "
        <script>
            alert('Data berhasil dihapus');
            document.location.href = 'index.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data gagal dihapus');
            document.location.href = 'index.php';
        </script>
    ";
}
?>