Hacer los algoritmos que calculen el promedio de una serie de notas hasta que se ingrese una nota
negativa, utilizar las tres estructuras repetitivas. ¿Cuál no se puede utilizar?
<?php
/* 
// ---------WHILE---------
$acumuladora = 0;
$contadora = 0;
$nota = readline("Ingrese la nota del alumno: ");
while ($nota >= 0) {
$acumuladora += $nota;
$contadora++;
$nota = readline("Ingrese la nota del alumno: ");
}
$promedio = $acumuladora / $contadora;
echo "El promedio de notas es: $promedio"; */

// ------------ DO - WHILE ---------------

$acumuladora = 0;
$contadora = 0;
do {
    $nota = readline("Ingrese la nota del alumno: ");
    if ($nota >= 0) {
        $acumuladora += $nota;
        $contadora++;
    }
} while ($nota >= 0);
$promedio = $acumuladora / $contadora;
echo "El promedio de notas es: $promedio";

// ------------ FOR ---------------

$acumuladora = 0;
$contadora = 0;
for ($nota = readline("Ingrese la nota del alumno: "); $nota >= 0; $nota = readline("Ingrese la nota del alumno: ")) {
    if ($nota >= 0) {
        $acumuladora += $nota;
        $contadora++;
    }
}

echo "Nueva linea de código";