<?php

$mahasiswa = [
    ["Anis Widya", "043040023", "aniswidya@smk.ac.id", "Teknik Informatika"],
    ["Fania Rizki", "033040001", "fania17@gmail.com", "Teknik Industri"],
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

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>Nama: <?php echo $mhs[0]; ?></li>
        <li>NIM: <?php echo $mhs[1]; ?></li>
        <li>Email: <?php echo $mhs[2]; ?></li>
        <li>Jurusan: <?php echo $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>
