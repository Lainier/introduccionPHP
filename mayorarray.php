<?php

$serie = $_POST['serie'];
$vector = explode(":", $serie);
$mayor = $vector[0];
        
foreach ($vector as $elemento) {
    if ($elemento>$mayor)
    {
    $mayor=$elemento;
    }
}

echo "El número mayor es $mayor.";