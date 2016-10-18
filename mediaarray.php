<?php

$serie = $_POST['serie'];
$vector = explode(":", $serie);
$suma = 0;
$elementos=0;

foreach ($vector as $elemento) {
    $suma += $elemento;
    $elementos++;
}

$media=$suma/$elementos;

echo "La media de los elementos es $media.";