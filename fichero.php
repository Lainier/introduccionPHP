<?php

$fichero= $_POST["fichero"];

$file = fopen($fichero, "w");
fwrite($file, "Esto es una nueva linea de texto" . PHP_EOL);
fwrite($file, "Otra más" . PHP_EOL);
fclose($file);

$file = fopen($fichero, "r");
while(!feof($file)) {    
    echo fgets($file). "<br />";
}
fclose($file);