<?php

$price = 24.9;
$descuento = 15/100;
$iva = 4/100;

$precioDescontado = $price - $price*$descuento;
$ivaProducto = $price*$iva;
$precioConIva = $price + $ivaProducto;

echo "El precio con el descuento aplicado es de: " . $precioDescontado . " € ";
echo '<br>';
echo "El precio del producto con IVA es de: " . $precioConIva . " €";