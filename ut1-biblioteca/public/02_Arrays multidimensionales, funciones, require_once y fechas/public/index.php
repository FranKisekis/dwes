<?php

// 1. Incluye los archivos mediante require_once.
require_once __DIR__ . "/../src/datos.php";
require_once __DIR__ . "/../src/funciones.php";

// 2. Muestra el catálogo completo (pero aplicamos filtros si existen).
$librosFiltrados = $catalogo;

// 3. Permite filtrar con ?genero= y ?disponible=1.
if (isset($_GET['genero'])) {
    $librosFiltrados = filtrarPorGenero($librosFiltrados, $_GET['genero']);
}

if (($_GET['disponible'] ?? null) === "1") {
    $librosFiltrados = filtrarDisponibles($librosFiltrados);
}

// 4. Muestra número de resultados y media de páginas de los resultados.
$numeroResultados = count($librosFiltrados);
$mediaPaginas = $numeroResultados > 0 ? calcularMediaPaginas($librosFiltrados) : 0;

// 5. Muestra el libro con más páginas.
$libroMasLargo = obtenerLibroMasLargo($librosFiltrados);

// 6. Escapa los textos antes de enviarlos al HTML.
function escaparTextos(string $t): string {
    return htmlspecialchars($t, ENT_QUOTES, 'UTF-8');
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo</title>
</head>
<body>

<h1>Catálogo de libros</h1>

<form method="get">
    <label>Género:
        <input type="text" name="genero" value="<?= escaparTextos($_GET['genero'] ?? '') ?>">
    </label>

    <label>Disponible:
        <input type="checkbox" name="disponible" value="1" <?= ($_GET['disponible'] ?? '') === "1" ? "checked" : "" ?>>
    </label>

    <button type="submit">Filtrar</button>
</form>

<hr>

<p><strong>Número de resultados:</strong> <?= $numeroResultados ?></p>
<p><strong>Media de páginas:</strong> <?= $mediaPaginas ?></p>

<?php if ($libroMasLargo): ?>
    <p><strong>Libro más largo:</strong> <?= escaparTextos($libroMasLargo['titulo']) ?> (<?= $libroMasLargo['paginas'] ?> páginas)</p>
<?php endif; ?>

<hr>

<?php foreach ($librosFiltrados as $libro): ?>
    <div>
        <p><strong>ID:</strong> <?= escaparTextos((string)$libro['id']) ?></p>
        <p><strong>Título:</strong> <?= escaparTextos($libro['titulo']) ?></p>
        <p><strong>Autor:</strong> <?= escaparTextos($libro['autor']) ?></p>
        <p><strong>Género:</strong> <?= escaparTextos($libro['genero']) ?></p>
        <p><strong>Páginas:</strong> <?= escaparTextos((string)$libro['paginas']) ?></p>
        <p><strong>Disponible:</strong> <?= $libro['disponible'] ? "Sí" : "No" ?></p>
        <p><strong>Fecha alta:</strong> <?= escaparTextos($libro['fechaAlta']) ?></p>
    </div>
    <hr>
<?php endforeach; ?>

</body>
</html>