<?php

$mahasiswa = [
    ["Anis Widya", "043040023", "Teknik Informatika", "aniswidya@smk.ac.idl"],
    ["Fania Rizki", "033040001", "Teknik Indrustri", "fania17.com"],
    ["Hani Valentina", "023040123", "Teknik Planologi", "hanivalen@gmail.com"],
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NRP : <?= $mhs[1]; ?></li>
        <li>Jurusan : <?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?> 

</body>
</html>