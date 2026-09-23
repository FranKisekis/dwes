<?php

$titulo = "  El nombre del viento  ";
$titulo = trim($titulo); //eliminados espacios
$longitud = strlen($titulo); //Longitud recogida en variable 
$contiene = str_contains($titulo, 'viento'); //comprobar que tenga la palabra viento
$sustituido = str_replace('viento', 'fuego', $titulo); //cambiada la palabra viento por fuego
$palabras = explode(' ', $sustituido); //Dividir en palabras la frase

echo "Titulo: ". $titulo . "<br>";
echo "La longitud es de : ". $longitud . "<br>";
echo "¿Contiene la palabra viento? 1= si, 0 = no ====>". $contiene . "<br>";
echo "El titulo sustituido es ". $sustituido . "<br>";
print_r($palabras);