<?php

$serie = $_POST['serie'];
$vector = explode(":", $serie);
$suma = 0;

foreach ($vector as $elemento) {
    $suma += $elemento;
}

echo "La suma de los elementos es $suma.";