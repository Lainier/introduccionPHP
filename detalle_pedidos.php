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

$id= $conexion->real_escape_string($_GET['idPedido']);

$sql = <<< SQL
    SELECT nombreProd, d.precioE, cantidad
     from detalle_pedido d, producto p
     where d.idProducto=p.idProducto and d.idPedido=?
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

$sentencia->bind_result($producto, $precio, $cantidad);
$i=1;
$importe=0;

?>

<div class="row bg-info">
            <div class="col-md-4">
             <h4>Producto</h4>
            </div>
             <div class="col-md-4">
             <h4>Precio</h4>
            </div>
            <div class="col-md-1">
              <h4>Cantidad</h4>
            </div>
</div>

<?php
            
while ($sentencia->fetch()){
    ?>
        <div class="row <?php echo $i%2==0 ? 'bg-warning':'';?> ">
            <div class="col-md-4">
                    <?php echo $producto; ?>
            </div>
             <div class="col-md-4">
                <?php echo $precio;?>
            </div>
             <div class="col-md-1">
                <?php echo $cantidad;?>
            </div>
        </div>
    <?php
    $importe=$importe+($precio*$cantidad);       
    $i++;
}

?>

<div class="row bg-info">
            <div class="col-md-4">
             <h4>Importe: <?php echo $importe;?>€</h4>
            </div>
</div>

<?php            
$sentencia->close();
$conexion->close();   
?>
        </div>
    </body>
</html>