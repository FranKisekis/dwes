<?php

$libros = [
        [
            'id' => 29,
            'titulo' => 'El temor de un hombre sabio',
            'autor' => 'Pedro Ruiz',
            'paginas' => 451,
            'disponible' => false,
        ],

        [
            'id' => 30,
            'titulo' => 'El temor de una sabia',
            'autor' => 'Pedro Felipe',
            'paginas' => 153,
            'disponible' => true,
        ],

        [
            'id' => 31,
            'titulo' => 'La vida',
            'autor' => 'Carlota Saez',
            'paginas' => 967,
            'disponible' => false,
        ],

        [
            'id' => 32,
            'titulo' => 'Cocina rápida y rica',
            'autor' => 'Arguiñano Jr',
            'paginas' => 127,
            'disponible' => true,
        ]
];

$contador = 0;

foreach ($libros as $libro) {
    if ($libro['paginas'] >=500 && $libro['disponible'] === true){
        echo $libro['titulo'] . '<br>';
        $contador ++;
    }
};

echo 'Se han encontrado $contador libros'; 