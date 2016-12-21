<?php

include "config.php";

$conexion = new mysqli($host,$user,$pass,$database);

if ($conexion->connect_errno) { 
    die( "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error); 
}

$conexion->set_charset("utf8");