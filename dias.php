<?php
$mes = $_POST["mes"];
$anyo = $_POST["anyo"];

switch ($mes) {
    case 1:
        echo "31 días.";
        break;
    case 2:
        if ($anyo % 4 != 0)
            {echo "28 días";
            }
            elseif ($anyo % 400 == 0)
              {echo "28 días";
              }
              else
                  {echo "29 días";
                  }
        break;
    case 3:
        echo "31 días.";
        break;
    case 4:
        echo "30 días.";
        break;
    case 5:
        echo "31 días.";
        break;
    case 6:
        echo "30 días.";
        break;
    case 7:
        echo "31 días.";
        break;
    case 8:
        echo "31 días.";
        break;
    case 9:
        echo "30 días.";
        break;
    case 10:
        echo "31 días.";
        break;
    case 11:
        echo "30 días.";
        break;
    case 12:
        echo "31 días.";
        break;
}