<?php 

$conexion = new mysqli("localhost", "root","ausias", "neptuno"); 

if ($conexion->connect_errno) { 
    die( "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error); 
}
echo "Conectado a la base de datos...<br>";

$cliente = $conexion->real_escape_string($_POST['cliente']);
$telefono = $conexion->real_escape_string($_POST['telefono']);
$id= $conexion->real_escape_string($_POST['id']);

$sql = <<< SQL
    UPDATE cliente
     set nombreCli='$cliente', telefono='$telefono'
     where idCliente='$id'
SQL;

if ($conexion->query($sql)) {
    echo "Los datos se han actualizado correctamente";
}
else {
    echo "Error actualizando los datos";
}
    
$conexion->close();