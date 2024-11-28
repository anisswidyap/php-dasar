<?php

// Variabel Scoppe / lingkup variabel
$x = 10;

function tampil() {
    global $x;
    echo $x;
}

tampil();

?>