<?php

$mahasiswa = [
    [
        "nama" => "Anis Widya",
        "nrp" => "04304002",
        "email" => "aniswidya@smk.ac.id",
        "jurusan" => "Teknik Industri",
        "gambar" => "me.jpg"
    ],
    [
        "nama" => "Fania Rizky",
        "nrp" => "03304000",
        "email" => "fania17.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "pania.png"
    ]
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
        <li><img src="img/<?= $mhs["gambar"]; ?>" alt="<?= $mhs["nama"]; ?>" width="100"></li>
        <li>Nama: <?= $mhs["nama"]; ?></li>
        <li>NRP: <?= $mhs["nrp"]; ?></li>
        <li>Email: <?= $mhs["email"]; ?></li>
        <li>Jurusan: <?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>
