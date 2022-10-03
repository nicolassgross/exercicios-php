<?php

// Você deve lembrar das aulas básicas de Matemática, quando aprendemos a potenciação.
// Ela é definida por três números:
// base
// expoente
// potência (resultado)


$base = 3;
$expoente = 3;
$resultado = 1;
$count=1;

while($count <= $expoente){
    $resultado *= $base;
    $count++;
}

echo $resultado;