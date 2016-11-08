<?php
$euros = $_POST["euros"]*100;
$cambios=array(500,200,100,50,20,10,5,1,0.5,0.2,0.1,0.05,0.02,0.01);
$i=0;

echo $euros/100, " euros se divide en: ";
$resultado=intdiv($euros,$cambios[$i]);
 
 while ($euros>0) {
    $resultado=intdiv($euros,$cambios[$i]*100);
    $euros=$euros-($resultado*$cambios[$i]*100);
    if ($cambios[$i]>=1) {
         echo "$resultado billetes de $cambios[$i] euros, ";
     }
     else {
          echo "$resultado monedas de $cambios[$i] euros, ";
     }
     $i++;
}
    