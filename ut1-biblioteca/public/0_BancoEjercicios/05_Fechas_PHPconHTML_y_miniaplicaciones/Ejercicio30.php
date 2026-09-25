<?php

date_default_timezone_set('Europe/Madrid');

$fechaHoy = new DateTimeImmutable();
$fechaDevolucion = $fechaHoy->modify('+15 days');
echo 'Hoy estamos a ' . $fechaHoy->format('d/m/Y H:i') . '<br>';
echo 'Debes devolver el libro el: ' . $fechaDevolucion->format('d/m/Y H:i');

?>