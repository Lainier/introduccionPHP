<?php

$linea=1;


echo "Tabla de 100 números, de 10 en 10<br/>";
echo "<table border=".'1'.">";
echo "$fila.$color1";
for ($i = 1; $i <= 100; $i++) {
        echo "<td>$i*2 </td>";
        if ($i % 10 == 0){
            echo "</tr>";
            if ($linea%2==0){
                echo "$fila.$color2";
            } else {
                echo "$fila.$color1";
            };
            $linea++;
        }
        
}
echo "</table>";