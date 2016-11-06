<?php
$euros = $_POST["euros"];
$cambios=array(0=>'500',1=>'200',2=>'100',3=>'50',5=>'20',6=>'10',7=>'5',8=>'1',9=>'0.5',10=>'0.2',11=>'0.1');
$i=0;

echo "$euros se divide en2: ";
$resultado=intdiv($euros,$cambios[$i]);
 echo "Resultado es: ";
 echo "Resultado es: $resultado .";
 
 while ($euros>0) {
    $resultado=intdiv($euros,$cambios[$i]);
    echo "Resultado es: $resultado .";
    $euros=$euros-($resultado*$cambios[$i]);
    echo "$euros restantes .";
    $i++;
     if ($cambios[$i]>=1) {
         echo "$resultado billetes de $cambios[$i] euros, ";
     }
     else {
          echo "$resultado monedas de $cambios[$i] euros, ";
     }
}
    