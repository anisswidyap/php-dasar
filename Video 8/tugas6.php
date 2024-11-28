<?php

$mahasiswa = [
    [
        "nama" => "Anis Widya",
        "nrp" => "04304002",
        "email" => "aniswidya@smk.ac.id",
        "jurusan" => "Teknik Industri"
    ],
    [
        "nama" => "Fania Rizky",
        "nrp" => "03304000",
        "email" => "fania17@gmail.com",
        "jurusan" => "Teknik Informatika",
        "tugas" => [90, 80, 100]
    ]
];

// Mengakses elemen dalam array multidimensi
echo "Nama Mahasiswa 2: " . $mahasiswa[1]["nama"] . "<br>";
echo "Nilai Tugas ke-3 Mahasiswa 2: " . $mahasiswa[1]["tugas"][2] . "<br>";
echo "Nama Mahasiswa 1: " . $mahasiswa[0]["nama"] . "<br>";

?>
