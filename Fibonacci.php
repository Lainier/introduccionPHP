<?php

class Fibonacci {
    var $sucesion=[];
    
    function __construct($num) {
        if ($num > 0) {
            $this->sucesion[] = 0;
            $a1 = 0;
        }
        if ($num > 1) {
            $this->sucesion[] = 1;
            $a2 = 1;
        }
        for ($i = 3; $i <= $num; $i++) {
            $nuevo = $a1 + $a2;
            $this->sucesion[] = $nuevo;
            $a1 = $a2;
            $a2 = $nuevo;
        }
    }
    
    function getLimite(){
        return count($this->sucesion);
    }
    
    function getSerie(){
        return $this->sucesion;
    }
    
    function inSerie($num){
        $esta = FALSE;
        $i=0;
        while (! $esta AND $i<count($this->sucesion) AND $this->sucesion[$i]<=$num){
            if ($num == $this->sucesion[$i]){
                $esta = TRUE;
            }
            $i++;
        }
        return $esta;
    }
    
    function getElemento($num){
        return $this->sucesion[$num-1];
    }
}