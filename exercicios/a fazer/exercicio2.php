<?php

// Faça um programa que peça um número inteiro e determine se ele é ou não um número primo. Um número primo é aquele que é divisível somente por ele mesmo e por 1.

$numero_a_ser_verificado = 27;
$inicio_verificação = 0;
$final_verificação = $numero_a_ser_verificado;

while ($inicio_verificação <= $final_verificação) {
    if(($numero_a_ser_verificado % $numero_a_ser_verificado == 1)) {
        echo "é um primo";
    }
    
    $numero_a_ser_verificado = $numero_a_ser_verificado + 1; 
}
