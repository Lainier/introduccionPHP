<?php

$serie = $_POST['serie'];
$numero = $_POST['numero'];
$vector = explode(":", $serie);
$posicion=0;
        
foreach ($vector as $elemento) {
    if ($numero>$elemento)
    {
    $vector = array(
    $posicion => $numero,
    );
    }
    else
    {
     $vector = array(
     $posicion => $elemento,
     );
    }
    $posicion++;
}

echo "El número mayor es $mayor.";