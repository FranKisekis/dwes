<?php

$texto = "PHP"; 
$i = 0; 
while ($i < strlen($texto)) {
     if ($i === 1) { 
        echo "-"; 
    } 
    echo $texto[$i]; 
    $i++; 
}

// Lo que se imprime es P-HP
// Se ejecuta un total de 3 veces