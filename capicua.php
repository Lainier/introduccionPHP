<?php
$palabra = $_POST["palabra"];

$i=0;
$cap=1;
$contador=0;

while ($i<strlen($palabra)/2 && $cap==1) {
   $posicion=strlen($palabra)-$i-1;
   if ($palabra[$i] == $palabra[$posicion])
   {
    $cap=1;
    $contador++;
   }
$i++;
}

if ($strlen($palabra) == $contador) {
echo "La frase es capicua";
}
  else {
  echo "La frase no es capicua";
  }