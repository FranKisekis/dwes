<?php

$libros = [
 [
 'id' => 1,
 'titulo' => 'Dune',
 'genero' => 'ciencia-ficcion',
 'autor' => 'Ursula K. Le Guin',
 'disponible' => true,
 ],
 [
 'id' => 2,
 'titulo' => 'El nombre del viento',
 'genero' => 'fantasia',
 'autor' => 'Patrick R.',
 'disponible' => false,
 ],
];

foreach ($libros as $libro) {
    if ($libro['autor'] === 'Ursula K. Le Guin'){
        echo $libro['titulo'] . '<br>';
    }
};