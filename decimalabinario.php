<?php
$resultado = $_POST["numero"];
$binario="";
while ($numero>0) {
$resto = $numero % 2;
$numero = intdiv($numero,2); // División entera
$binario=$resto.$binario;
}

echo "El numero en binario es $binario";