<?php

$vehiculos = $_POST['vehiculos'];

$resultado="";

echo "Los vehículos elegidos son: <br />";

foreach ($vehiculos as $vehiculo) {
  echo "$vehiculo <br />";
}