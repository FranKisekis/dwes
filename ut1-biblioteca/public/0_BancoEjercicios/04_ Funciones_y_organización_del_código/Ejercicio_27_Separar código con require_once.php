// Esta primera parte iría en public/index.php
<?php

require_once __DIR__ . '/../src/funciones.php';

formatearTitulo();

//Esta parte iría en /src/funciones.php

<?php

declare(strict_types=1);

function formatearTitulo(string &$titulo): string {
    return $titulo;
}