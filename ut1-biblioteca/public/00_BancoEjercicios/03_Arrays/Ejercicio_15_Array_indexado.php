<?php

$generos = ["fantasia", "policiaca", "terror", "ciencia ficcion", "historico"];
$generos[] = "cientifica";
$genero[2] = "horror";
unset($genero[0]); 

foreach ($genero as $generos) {
    echo $generos . '<br>';
}
