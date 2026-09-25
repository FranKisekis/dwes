<?php

$titulo = "Dune";
$autor = "Frank Herbert";
$paginas = 412;

// Concatenación
$texto1 = $titulo . " — " . $autor . " (" . $paginas . " páginas)";
echo $texto1;

// Interpolación
$texto2 = "$titulo — $autor ($paginas páginas)";
echo '<br>';
echo $texto2;
