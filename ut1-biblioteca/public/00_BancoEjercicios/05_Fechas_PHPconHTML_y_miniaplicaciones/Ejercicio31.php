<?php

$fecha1 = new DateTimeImmutable('1988-07-28');
$fecha2 = new DateTimeImmutable('2026-09-24');

$diferencia = $fecha1->diff($fecha2);

echo 'Fecha 1 = ' . $fecha1->format('d-m-Y') .'<br>';
echo 'Fecha 2 = ' . $fecha2->format('d-m-Y') .'<br>';

echo 'Hay una diferencia de ' . $diferencia->days . ' dias entre las dos fechas.';
?>