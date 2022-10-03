<?php

$numero = 7802;
$divisores = 0;

for($contador = 2; $contador < $numero; $contador++) {
    //verifica se é divisível e retorna numero intero
    if($numero % $contador == 0){
        echo "O número informado é multiplo de $contador \n";
        $divisores++;
    }
}

if($divisores >= 0) {
    echo "Não é, tem $divisores divisores além de 1 e ele mesmo";
} else {
    echo "É primo!";
}