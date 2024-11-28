<?php

 $mahasiswa = [
     ["Anis Widya", "043040023", "aniswidya@smk.ac.id", "Teknik Informatika"],
     ["Fania Rizki", "033040001", "Teknik Industri", "fania17.com"],
 ];

?>

// array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

    <h1></h1>

    <?php foreach( $mahasiswa as$mhs ) : ?>
    <ul>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NRP : <?= $mhs[1]; ?></li>
        <li>Email : <?= $mhs[2]; ?></li>
        <li>JUrusan : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>