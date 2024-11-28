<?php

function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat Datang, Admin!";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Fuction</title>
</head>
<body>
<h1>Selamat Datang, Administrator!</h1>
<h1><?php echo salam("Pagi","Anis"); ?></h1>
</body>
</html>