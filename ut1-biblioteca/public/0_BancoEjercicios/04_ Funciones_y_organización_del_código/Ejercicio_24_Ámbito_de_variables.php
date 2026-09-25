<?php

declare(strict_types=1);
// require_once __DIR__ . '/../src/funciones.php';

//El programa no funciona como desea el autor porque no le ha pasado 
//como argumento la variable $contador utilizando el "&" y su confusión
// se debe principalmente a que la variable $contador de la función 
// tiene alcance local y los cambios que reciba no afectan a la global

$contador = 0;
function incrementar(int $contador) {
 $contador++;
}
incrementar($contador);
echo $contador;