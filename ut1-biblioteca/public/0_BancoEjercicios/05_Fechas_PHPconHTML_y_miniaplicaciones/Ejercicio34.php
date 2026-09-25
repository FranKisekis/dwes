<!-- Crea una página con un catálogo de al menos seis libros en un array multidimensional. X
Debe permitir filtrar mediante ?genero=,     
mostrar solo coincidencias, 
ordenar manualmente los títulos 
antes de mostrarlos, indicar cuántos resultados hay y 
mostrar una fecha de revisión del catálogo calculada como hoy + 30 días. Organiza al menos una parte de la lógica en funciones.  X-->

<?php
$catalogo = [
    ["titulo" => "Profesores de enseñanza secundaria Geografía e Historia", "autor" => "Isabel García Lucas", "genero" => "Didáctico"],
    ["titulo" => "LOVE", "autor" => "Wada Arco", "genero" => "Arte"],
    ["titulo" => "El color de la magia", "autor" => "Terry Pratchet", "genero" => "Fantasía"],
    ["titulo" => "Bakemonogatari", "autor" => "NISIOISIN", "genero" => "Terror"],
    ["titulo" => "The Legend of Zelda Twiligth Princess", "autor" => "Akira Himekawa", "genero" => "Fantasía"],
    ["titulo" => "Juliano el apóstata", "autor" => "Gore Vidal", "genero" => "Histórico"]
];

function filtrarPorGenero(array $libros, string $generoBusqueda): array {
    return array_filter($libros, function($elemento) use ($generoBusqueda) {
        $generoActual = is_array($elemento) ? ($elemento['genero'] ?? '') : ($elemento->genero ?? '');
        
        return strcasecmp(trim($generoActual), trim($generoBusqueda)) === 0;
    });
}

function ordenarPorTitulo(array &$libros): void {
    usort($libros, function($a, $b) {
        return strcmp($a['titulo'], $b['titulo']);
    });
}

function obtenerFechaRevision(): string {
    $fecha = new DateTime();
    $fecha->modify('+30 days');
    return $fecha->format('d/m/Y');
}

$generoFiltro = $_GET['genero'] ?? null;

$librosFiltrados = filtrarPorGenero($catalogo, $generoFiltro); ???

ordenarPorTitulo($librosFiltrados);

$totalResultados = count($librosFiltrados);

$fechaRevision = obtenerFechaRevision();
?>