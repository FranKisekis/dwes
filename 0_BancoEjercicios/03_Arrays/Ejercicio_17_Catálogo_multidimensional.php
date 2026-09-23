<?php

$libro1 = [
    'id' => 29,
    'titulo' => 'El temor de un hombre sabio',
    'autor' => 'Pedro Ruiz',
    'paginas' => 451,
    'disponible' => false,
];

$libro2 = [
    'id' => 30,
    'titulo' => 'El temor de una sabia',
    'autor' => 'Pedro Felipe',
    'paginas' => 153,
    'disponible' => true,
];

$libro3 = [
    'id' => 31,
    'titulo' => 'La vida',
    'autor' => 'Carlota Saez',
    'paginas' => 967,
    'disponible' => false,
];

$libro4 = [
    'id' => 32,
    'titulo' => 'Cocina rápida y rica',
    'autor' => 'Arguiñano Jr',
    'paginas' => 127,
    'disponible' => true,
];

$biblioteca = [$libro1, $libro2, $libro3, $libro4];

foreach ($biblioteca as $libro) {
    echo $libro['titulo'] . '<br>';
    echo $libro['autor'] . '<br>';
};