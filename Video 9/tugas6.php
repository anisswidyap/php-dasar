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
    <ul>
    <?php foreach( $mahasiswa as $mhs ) : ?> 
        <li>
            <a href="tugas7.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li> 
    <?php endforeach; ?>
    </ul>

</body>
</html>
