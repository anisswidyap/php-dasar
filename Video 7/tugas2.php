<?php

// Array
// Variabel yang dapat memiliki banyak nilai
// Elemen pada array boleh memiliki tipe data yang berbeda
// Pasangan antara key dan value
// Key-nya adalah index, yang dimulai dari 0

// Cara lama
$hari = array("Senin", "Selasa", "Rabu");

// Cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arrl = [123, "tulisan", false];

// Menampilkan Array
// var_dump() / print_r()
// echo $hari; // Tidak bisa digunakan
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";

// Menampilkan 1 elemen pada array
echo $arrl[0]; // Output: 123
echo "<br>";
echo $bulan[1]; // Output: Februari

?>
