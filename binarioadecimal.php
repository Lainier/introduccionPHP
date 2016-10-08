<?php
$binario = $_POST["binario"];

$i=0;
$decimal=0;

while ($i<strlen($binario)) {
   if ($binario[$i] == 1) {
   $exponente=strlen($binario)-$i-1;
   $potencia=pow(2,$exponente);
   $decimal = $decimal + $potencia;
   }
$i++;
}

echo "El numero en decimal es $decimal";