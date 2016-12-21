<html>
    <head>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>    
    <body>
        <div class="container">

<?php

include "conexion.php";

$id= $conexion->real_escape_string($_GET['idCliente']);

$sql = <<< SQL
    SELECT idPedido, concat(nombre,' ',apellidos) as elempleado, fechaPedido, cargosE
     from pedido p, empleado e
     where p.idEmpleado=e.idEmpleado and p.idCliente=?
SQL;

$sentencia = $conexion->prepare($sql);

if (!$sentencia){
die("Error al preparar: ");
}

$sentencia->bind_param("i",$id);
$sentencia->execute();

if ($sentencia->errno){
die("Error en la consulta ".$sentencia->error);
}

$sentencia->bind_result($id, $empleado, $fecha, $cargosE);
$i=1;

?>

<div class="row bg-info">
            <div class="col-md-4">
             <h4>Empleado</h4>
            </div>
             <div class="col-md-4">
             <h4>Fecha del pedido</h4>
            </div>
            <div class="col-md-1">
              <h4>Importe</h4>
            </div>
             <div class="col-md-1">
              <h4>Detalles</h4>
            </div>
</div>

<?php
            
while ($sentencia->fetch()){
    ?>
        <div class="row <?php echo $i%2==0 ? 'bg-warning':'';?> ">
            <div class="col-md-4">
                    <?php echo $empleado;?>
            </div>
             <div class="col-md-4">
                <?php echo $fecha;?>
            </div>
             <div class="col-md-1">
                <?php echo $cargosE;?>
            </div>
            <div class="col-md-1">
                <a href="detalle_pedidos.php?idPedido=<?php echo $id;?>">Detalles</a>
            </div>
        </div>
    <?php
    $i++;
}
$sentencia->close();
$conexion->close();   
?>
        </div>
    </body>
</html>