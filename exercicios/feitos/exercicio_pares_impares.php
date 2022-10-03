<?php

$inicio_impar = 0;
$final_impar = 100;
$controle_impar = $inicio_impar;
$qtd_impares= 0;

while ($controle_impar <= $final_impar) {
    if ($controle_impar % 2 == 1) {
        $qtd_impares = $qtd_impares + 1;
    }
    
    $controle_impar = $controle_impar + 1;
}

echo $qtd_impares . "\n";

$inicio_pares = 0;
$final_pares = 100;
$controle_pares = $inicio_pares;
$qtd_pares= 0;

while ($controle_pares <= $final_pares) {
    if ($controle_pares % 2 == 0) {
        $qtd_pares = $qtd_pares + 1;
    }
    
    $controle_pares = $controle_pares + 1;
}

echo $qtd_pares;