<?php 

$conexion = new mysqli("localhost", "root","ausias", "neptuno"); 

if ($conexion->connect_errno) { 
    die( "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error); 
}

$usuario = $conexion->real_escape_string($_POST['usuario']);
$pass = $conexion->real_escape_string($_POST['pass']);

$sql = <<< SQL
    SELECT *
     from cliente
     where codCliente='$usuario' and pass=md5('$pass')
SQL;

$resultado = new mysqli_result();
$validado=false;

if ($resultado = $conexion->query($sql) and $resultado->num_rows==1) {
	while ($fila = $resultado->fetch_array()){
                $validado=true;
                $id=$fila["idCliente"];
		$cliente=$fila["nombreCli"];
                $telefono=$fila["telefono"];
	}
	$resultado->free();
}

if ($validado==false){
   die ("Login incorrecto");
};

$conexion->close();

?>

<form action="edita.php" method="post">
            Actualice su información de cliente<br>
            Nombre de cliente: <input type="text" name="cliente" value="<?php echo $cliente;?>"><br>
            Telefono: <input type="text" name="telefono" value="<?php echo $telefono;?>"><br>
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <input type="submit">
</form>