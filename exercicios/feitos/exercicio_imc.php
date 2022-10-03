<?php

// IMC = Massa (kg) ÷ Altura (m)²

$massa_corporal = 112;
$altura = 1.85;
$indice_massa_corporal = $massa_corporal / ($altura ** 2);

echo "Seu IMC é de $indice_massa_corporal. Você está com o IMC ";

if ($indice_massa_corporal < 18.5) {
    echo "abaixo";
} elseif ($indice_massa_corporal < 25) {
    echo "dentro";
} else {
    echo "acima";
}

echo " do recomendado" . "\n";

echo (1 + 1) * 3 ;

$a or $b or $c and $d;