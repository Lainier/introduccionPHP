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

$sql = <<< SQL
    SELECT idCliente, nombreCli, direccion
     from cliente
     order by nombreCli
SQL;

$sentencia = $conexion->prepare($sql);

if (!$sentencia){
die("Error al preparar: ");
}

$sentencia->execute();

if ($sentencia->errno){
die("Error en la consulta ".$sentencia->error);
}

$sentencia->bind_result($id, $nombre, $direccion);
$i=1;

?>
            
<div class="row bg-info">
            <div class="col-md-4">
             <h4>Cliente</h4>
            </div>
             <div class="col-md-4">
             <h4>Dirección</h4>
            </div>
            <div class="col-md-1">
              <h4>Pedidos</h4>
            </div>
</div>
    
<?php

while ($sentencia->fetch()){
    ?>
        <div class="row <?php echo $i%2==0 ? 'bg-warning':'';?> ">
            <div class="col-md-4">
                <?php echo $nombre; ?>
            </div>
             <div class="col-md-4">
                <?php echo $direccion;?>
            </div>
            <div class="col-md-1">
                <a href="pedidos.php?idCliente=<?php echo $id;?>">Pedidos</a>
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