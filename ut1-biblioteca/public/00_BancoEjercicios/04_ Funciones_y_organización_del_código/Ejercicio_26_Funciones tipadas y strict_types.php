<?php

declare(strict_types=1);
// require_once __DIR__ . '/../src/funciones.php';

function esLargo (int $numPags) : bool
 {
    if ($numPags >= 500) {return true;} else {return false;} 
 }

// esLargo("600");

 //No funciona la llamada porque al declarar los tipados estrictos 
 //el tipo de dato que recibe el argumento ha de ser exactamente int