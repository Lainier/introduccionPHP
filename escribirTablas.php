<?php

function escribirUnaTabla($numero) {
    for ($i = 1; $i <= 10; $i++) {
        echo "$numero x $i = ", $i * $numero, "<br>\n";
    }
}

echo '<table>';
echo '<tr>';
for ($i = 1; $i <= 10; $i++) {
    echo '<td>';
    escribirUnaTabla($i);
    echo '</td>';
    if ($i % 2 == 0) {
        echo '</tr><tr>';
    }
}
echo '</tr>';
echo '</table>';