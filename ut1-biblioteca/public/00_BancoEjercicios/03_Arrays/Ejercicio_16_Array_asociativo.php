<?php

$libro = [
    'id' => 29,
    'titulo' => 'El temor de un hombre sabio',
    'autor' => 'Pedro Ruiz',
    'paginas' => 451,
    'disponible' => false,
];

$libro['disponible'] = true;

foreach ($libro as $clave => $contenido) {
 echo "$clave: $contenido<br>";
}
