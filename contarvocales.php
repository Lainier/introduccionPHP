<?php
$frase = $_POST["frase"];

$contador=0;

function buscavocal($letra) {
    switch ($letra) {
    case "a": case "e": case "i": case "o": case "u": case "A": case "E": case "I": case "O": case "U":
        return true;
    default:
        return false;
    }
}

for ($i=0; $i<strlen($frase); $i++) {
  if (buscavocal($frase[$i])) {
    $contador++;
  }
}

echo "El numero de vocales es $contador";


