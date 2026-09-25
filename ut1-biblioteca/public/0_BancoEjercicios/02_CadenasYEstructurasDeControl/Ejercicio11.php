<?php
$codigo = 'F';

// Switch
switch ($codigo) {
    case 'F': $genero = 'Fantasía'; break;
    case 'CF': $genero = 'Ciencia ficción'; break;
    case 'T': $genero = 'Terror'; break;
    default: $genero = 'Desconocido';
}

// Match
$generoMatch = match ($codigo) {
    'F' => 'Fantasía',
    'CF' => 'Ciencia ficción',
    'T' => 'Terror',
    default => 'Desconocido',
};

echo "El género con switch-case da como resultado: " . $genero . "<br>";
echo "El género con match da como resultado: " . $generoMatch;