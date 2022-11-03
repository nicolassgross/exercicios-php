<?php

// Joaozinho quer calcular e mostrar a quantidade de litros de combustível gastos em uma viagem, ao utilizar um automóvel que faz 12 KM/L. 
// Para isso, ele gostaria que você o auxiliasse através de um simples programa. 
// Para efetuar o cálculo, deve-se fornecer o tempo gasto na viagem (em horas) e a velocidade média durante a mesma (em km/h). 
// Assim, pode-se obter distância percorrida e, em seguida, calcular quantos litros seriam necessários. Mostre o valor com 3 casas decimais após o ponto.

// Entrada
// O arquivo de entrada contém dois inteiros. O primeiro é o tempo gasto na viagem (em horas) e o segundo é a velocidade média durante a mesma (em km/h).

// Saída
// Imprima a quantidade de litros necessária para realizar a viagem, com três dígitos após o ponto decimal

//Horas
$tempo_gasto_em_viagem = 2;
//Km/H
$velocidade_media = 70;
//Km/L
$quantidade_litros_por_km_automovel = 12;

$qtd_litro_necessaria = ($velocidade_media * $tempo_gasto_em_viagem) / $quantidade_litros_por_km_automovel;

echo $qtd_litro_necessaria;