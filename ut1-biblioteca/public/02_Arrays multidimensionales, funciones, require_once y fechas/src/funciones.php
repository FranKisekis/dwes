<?php

declare(strict_types=1);

function buscarPorId(array $libros, int $id): ?array {
    foreach ($libros as $libro){
        if ($id === $libro["id"])return $libro; 
    }
    return null;
}

function filtrarPorGenero(array $libros, string $genero): array {
    $filtrado = [];
    foreach ($libros as $libro){
        if($genero === $libro["genero"]){
            $filtrado [] = $libro;
        }
    }
    return $filtrado;
}

function filtrarDisponibles(array $libros): array {
        $filtrado = [];
    foreach ($libros as $libro){
        if($libro["disponible"] === true){
            $filtrado [] = $libro;
        }
    }
    return $filtrado;
}

function calcularMediaPaginas(array $libros): float {
    $total = count($libros);
    $paginas = 0;
    foreach($libros as $libro){
        $paginas += $libro["paginas"];
    }
    return $paginas/$total;
}

function obtenerLibroMasLargo(array $libros): ?array{
    $libroLargo = $libros[0];

    foreach ($libros as $libro) {
        if ($libro['paginas'] > $maxLibro['paginas']) {
            $maxLibro = $libro;
        }
    }
    return $libroLargo;
}

?>