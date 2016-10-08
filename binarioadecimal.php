<?php
$binario = $_POST["binario"];
echo $binario;
$i=0;
$decimal=0;

while ($i<strlen($binario)) {
   if ($numero[i] == 1) {
   $potencia=pow(2,strlen($numero)-$i-1);
   $decimal = $decimal + $potencia;
   }
$i++;
}

echo "El numero en decimal es $decimal";