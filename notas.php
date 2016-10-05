<?php
$nota = $_POST["nota"];

if ($nota < 5)
    {echo "Suspenso";
    } elseif ($nota < 6)
        {echo "Su nota es $nota. Aprobado";
        } elseif ($nota < 7)
            {echo "Su nota es $nota. Bien";
            } elseif ($nota < 9)
               {echo "Su nota es $nota. Notable";
               } elseif ($nota < 10)
                   {echo "Su nota es $nota. Sobresaliente";
                   } elseif ($nota == 10)
                       {echo "Su nota es 10. Matrícula de honor";
                       } else
                           {echo "Debes introducir un número entre 0 y 10";
                           } 