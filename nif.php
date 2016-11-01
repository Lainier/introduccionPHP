<?php
$nif = $_POST["nif"];
$numero="";
$cambios=array(0=>'T',1=>'R',2=>'W',3=>'A',4=>'G',5=>'M',6=>'Y',7=>'F',8=>'P',9=>'D',10=>'X',11=>'B',12=>'N',13=>'J',14=>'Z',15=>'S',16=>'Q',17=>'V',18=>'H',19=>'L',20=>'C',21=>'K',22=>'E');

for ($i=0;$i<8;$i++) {
$numero=$numero.$nif[$i];
}

$resto = $numero % 23;
$letra = $cambios[$resto];

if ($nif[8]==$letra) {
echo "NIF correcto.";
}
else {
 echo "NIF incorrecto. La letra del DNI debe ser $letra";
}