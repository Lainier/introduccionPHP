<?php

$coche= $_POST["coche"];

    switch ($coche) {
    case "volvo": echo "El coche elegido es Volvo";break;
    case "saab": echo "El coche elegido es Saab";break;
    case "fiat": echo "El coche elegido es Fiat";break;
    case "audi": echo "El coche elegido es Audi";break;
    }