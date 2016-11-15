<?php

$fibo1=0;
$fibo2=1;

echo "<table border=".'1'.">";
echo "<tr>";
for ($i = 1; $i <= 100; $i++) {
        echo "<td>";
        $fibonacci=$fibo1+$fibo2;
        echo $fibonacci;
        $fibo2=$fibo1;
        $fibo1=$fibonacci;
        echo "</td>";
        if ($i % 10 == 0){
            echo "</tr>";  
        }
}
echo "</table>";