<?php

// $100 $50 $75 => $225/3
// 10 4 6 => 20/3

// Promedio:
// 1. Sumar las variables
// 2. Dividimos por la cantidad de variables

/* $promedioVentas = 225 / 3;
$promedioNotas = 20 / 3;
echo $promedioVentas;
echo PHP_EOL;
echo $promedioNotas; */

$acumuladora = 0;
$contadora = 0;
do {
    $compra = readline("Ingrese el precio de la compra: ");
    $acumuladora += $compra;
    $contadora++;
    $resp = readline("Quiere ingresar otra compra? S/N: ");
} while (strToUpper($resp) == 'S');
echo "El total vendido en el día es: $acumuladora" . PHP_EOL;
echo "La cantidad de ventas en el día es: $contadora" . PHP_EOL;
$promedio = $acumuladora / $contadora;
echo "El promedio de ventas fue: $promedio";