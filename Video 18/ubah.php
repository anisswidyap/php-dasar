<?php

$conn = mysqli_connect("localhost", "root","", "phpdasar");
require 'functions.php';


session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}





// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];



// Koneksi ke DBMS
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// Cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
    // Ambil data dari tiap elemen dalam form
    $nrp = $_POST["nrp"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $jurusan = $_POST["jurusan"];
    $gambar = $_POST["gambar"];

    // Query untuk menambahkan data
    $query = "INSERT INTO mahasiswa (nrp, nama, email, jurusan, gambar) VALUES ('$nrp', '$nama', '$email', '$jurusan', '$gambar')";

    // Cek apakah data berhasil ditambahkan atau tidak
    if( ubah($_POST ) > 0 ) {
        echo "
            <script>
                alert('Data berhasil diubah');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diubah');
                document.location.href = 'index.php';
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
</head>
<body>

    <h1>Tambah Data Mahasiswa</h1>
    
    <form action="" method="post" enctype="multipart/form_data">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
        <ul>
            <li>
                <label for="nrp">NRP: </label>
                <input type="text" name="nrp" id="nrp" required
                value="<?= $mhs["nrp"]; ?>">
            </li>
            <li>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" id="nama" required
                value="<?= $mhs["nama"]; ?>">
            </li>
            <li>
                <label for="email">Email: </label>
                <input type="email" name="email" id="email" required
                value="<?= $mhs["email"]; ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan: </label>
                <input type="text" name="jurusan" id="jurusan" required
                value="<?= $mhs["jurusan"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar: </label>
                <img src="img/<?= $mhs['gambar']; ?>" width="40" ><br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data!</button>
            </li>
        </ul>
    </form>
</body>
</html>