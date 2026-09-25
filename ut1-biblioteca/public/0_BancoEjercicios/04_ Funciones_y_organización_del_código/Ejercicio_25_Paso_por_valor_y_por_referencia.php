<?php

declare(strict_types=1);
// require_once __DIR__ . '/../src/funciones.php';

function duplicarValor($n) {
 $n *= 2;
}
function duplicarReferencia(&$n) {
 $n *= 2;
}
$a = 5;
$b = 5;
duplicarValor($a);
duplicarReferencia($b);
echo "$a - $b";

//al final $a valdrá 5 y $b valdrá 2 porque el ampersand hace que cambie el valor de la memoria
 