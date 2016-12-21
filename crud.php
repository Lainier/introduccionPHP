<?php

include "conexion.php";

$usuario = $conexion->real_escape_string($_POST['usuario']);
$passwd = $conexion->real_escape_string($_POST['passwd']);

$sql = <<< SQL
    SELECT idCargo
     from empleado
     where usuario = '$usuario' and pass = sha2('$passwd',512)
SQL;

$sentencia = $conexion->prepare($sql);

if (!$sentencia){
    die("Error al preparar: ");
}

$sentencia->execute();
if ($sentencia->errno){
    die("Error al ejecutar: ".$sentencia->error);
}

$sentencia->bind_result($cargo);

$validar=0;

while ($sentencia->fetch()){
$validar=1;
}

$sentencia->close();
$conexion->close();

if ($validar==0) {
    echo "Login incorrecto";
    echo '<meta http-equiv="refresh" content="1;URL=login.html">';
    echo '<a href="representante.php">Pincha aquí si tienes prisa</a>';
}

switch ($cargo) {
    case "1":
        echo '<meta http-equiv="refresh" content="3;URL=representante.php">';
        echo '<a href="representante.php">Pincha aquí si tienes prisa</a>';
        break;
    case "2":
        echo '<meta http-equiv="refresh" content="3;URL=vicepresidente.php">';
        echo '<a href="comercial.php">Pincha aquí si tienes prisa</a>';
        break;
    case "3":
        echo '<meta http-equiv="refresh" content="3;URL=gerente.php">';
        echo '<a href="gerente.php">Pincha aquí si tienes prisa</a>';
        break;
    case "4":
        echo '<meta http-equiv="refresh" content="3;URL=coordinador.php">';
        echo '<a href="coordinador.php">Pincha aquí si tienes prisa</a>';
        break;
    default:
        break;
}