<?php

$moneda = $_POST['moneda'];
$cantidad = $_POST['cantidad'];
$monedasdestino = $_POST['monedasdestino'];
$cambios=array("euro"=>1,"usdolar"=>1.089,"libra"=>0.89,"rublo"=>67.644,"yen"=>113.58,"yuan"=>7.366);

foreach ($monedasdestino as $monedadestino) {
 $valoreuros=$cantidad/$cambios[$moneda];
 $conversion=$valoreuros*$cambios[$monedadestino];
 echo "$conversion $monedadestino; ";
}