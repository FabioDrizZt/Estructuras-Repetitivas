<?php
// --------------------------------
// -- Bucle While - Do While
// --------------------------------

/*
La idea del bucle while es ejecutar un bloque de código hasta que la expresión haya cambiado.
while (expresión lógica)
{
//código
}
while (true) // Bucle infinito: No ejecuten esto
{
echo "hola mundo";
}
do{
//código
}while(expresión lógica);
*/

while (1 == 0) // bucle que nunca se ejecuta
{
    echo "hola mundo";
}

//Bucle con un $contador
echo " ---- while ----" . PHP_EOL;

$contador = 0;
while ($contador > 0) {
    echo "Cuenta regresiva: $contador" . PHP_EOL;
    $contador--;
    /*     if ($contador<5){
    echo "el contador llego a 5";
    break;#permite cortar la ejecución del while
    } */
}

echo "----do while---- " . PHP_EOL;

$contador = -10;
do {
    echo "Cuenta regresiva: $contador" . PHP_EOL;
    $contador--;
} while ($contador > 0);