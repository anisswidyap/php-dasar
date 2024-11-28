<?php

// Variabel Scoppe / lingkup variabel
$x = 10;

function tampil() {
    $x = 20;
    echo $x;
}

tampil();
echo "<br>";
echo $x;

?>