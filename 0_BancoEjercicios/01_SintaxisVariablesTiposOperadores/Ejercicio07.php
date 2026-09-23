<?php 
// $Titulo = "Dune" 
// $paginas = "412"; 
// const max_prestamos = 3; 
// $disponible = TRUE 
// Echo "Libro: " + $Titulo; 
// $puede = $paginas > 400 && $disponible = true;

$Titulo = "Dune"; //faltaba el punto y coma
$paginas = "412";
const max_prestamos = 3;
$disponible = true; //faltaba punto y coma, funciona igual con mayúscula o minúscula
echo "Libro: " . $Titulo; //La concatenación no se hace con el signo más, se hace con un punto
$puede = $paginas > 400 && $disponible === true; //Le faltaban iguales, se colocan 3 para tener en cuenta el tipo de dato.