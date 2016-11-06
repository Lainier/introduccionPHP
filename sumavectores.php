<?php
$v = array(1=>'90',30=>'2',e=>'99',hola=>'43');
$suma=0;

foreach ($v as $valor) {
    $suma = $suma+$valor;
}

unset($valor);

echo "La suma del vector asociativo es $suma.";

?>
    