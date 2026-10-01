<?php

// <!-- Ejercicio 1. Callable y callback
// Crea una función aplicar(int $n, callable $callback): int. Úsala primero con una función doble(int
// $n): int y después con otra función cuadrado(int $n): int. Indica qué valor devuelve cada llamada.

function doble (int $numero){
    return 2* $numero;
}

function cuadrado (int $numero){
    return $numero **2;
}

function aplicar(int $n, callable $callback):int{
    return $callback($n);
}

aplicar(2, 'cuadrado'); //devuelve 4
aplicar(3, 'doble'); //devuelve 6

?>