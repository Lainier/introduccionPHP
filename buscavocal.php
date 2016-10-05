<?php

function buscavocal($letra) {
    switch ($letra) {
    case "a": case "e": case "i": case "o": case "u": case "A": case "E": case "I": case "O": case "U":
        return true;
    default:
        return false;
    }
}