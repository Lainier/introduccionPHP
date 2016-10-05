<?php

include 'buscavocal.php';

function cambiavocal ($frase, $vocal) {
for ($i=0; $i<strlen($frase); $i++) {
  if (buscavocal($frase[$i])) {
      echo $vocal;
      }
      else {
       echo $frase[$i];
      }
}
echo "<br>\n";
}

$frase = $_POST["frase"];

cambiavocal($frase,a);
cambiavocal($frase,e);
cambiavocal($frase,i);
cambiavocal($frase,o);
cambiavocal($frase,u);