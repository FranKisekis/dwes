<?php
// 1.Leer 3 parámetros
$tipo = $GET["tipo"] ?? 'externo';
$dias = $GET["dias"] ?? 0;
$renovacion = $GET["renovacion"] ?? 'no';

//2. Convierte dias a int.

$dias = (int)$dias;

//3.Usa match para asignar el máximo de días de préstamo: alumno 15, profesor 30, externo 7.
$maxDias = match ($tipo) {
    'alumno' => 15,
    'profesor' => 30,
    'externo' => 7,
     default =>7
};

// 4. Si renovacion es si, añade 7 días al límite excepto para usuarios externos.
if ($renovacion === 'si' && $tipo !== 'externo') {
    $maxDias += 7;
}

// 5. Clasifica la situación como «correcta», «último día», «retraso leve» o «retraso grave». 
// Define tú los límites de retraso leve y grave y déjalos visibles como constantes.

const retrasoLeve =7;
const retrasoGrave =14;

$estado = '';
$retraso = $dias - $maxDias;


if ($retraso < 0) {
    $estado = 'correcta';
} elseif ($retraso === 0) {
    $estado = 'último día';
} elseif ($retraso <= retrasoLeve) {
    $estado = 'retraso leve';
} else {
    $estado = 'retraso grave';
}

// 6. Calcula una penalización de 0,50 € por cada día de retraso.
$penalizacion = ($retraso > 0) ? $retraso * 0.50 : 0;

// 9. Escapa cualquier texto procedente de la URL antes de incluirlo en HTML.
$tipoSafe       = htmlspecialchars($tipo);
$renovacionSafe = htmlspecialchars($renovacion);

// 7. Muestra una frase completa usando interpolación o concatenación.

echo "<p>Tipo: $tipoSafe — Días: $dias — Renovación: $renovacionSafe</p>";
echo "<p>Máximo permitido: $maxDias días</p>";
echo "<p>Estado del préstamo: <strong>$estado</strong></p>";
echo "<p>Penalización: " . number_format($penalizacion, 2) . " €</p>";

// 8. Genera con un bucle una lista de los días de retraso, pero no muestres más de 10 líneas. Si hay más
// retraso, añade «…» al final.
if ($retraso > 0) {
    echo "<h3>Días de retraso:</h3><ul>";

    for ($i = 1; $i <= 10; $i++) {
        echo "<li>Día $i de retraso</li>";
    }

    if ($retraso > 10) {
        echo "<li>…</li>";
    }

    echo "</ul>";
}

?>