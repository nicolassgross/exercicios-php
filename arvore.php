<?php

//Quais váriaveis são necessárias inicializar e se precisa setar
$char_espaco = " ";
$char_estrela  = "*";
$tamanho_arvore = 10;
$contador_estrelas = 0;
$contador_espacos = $tamanho_arvore - 1;
$minha_arvore = "";
$espacos = "";
$estrelas = "";

//Lógica do exercício ou regra de negócio
for ($linha = 1; $linha <= $tamanho_arvore; $linha++)
{
        for ($coluna = 1; $coluna <= $contador_espacos; $coluna++) 
        {
            $espacos = $espacos . $char_espaco; 
        }
        for ($coluna = 1; $coluna <= $contador_estrelas; $coluna++) 
        {
            $estrelas = $estrelas . $char_estrela; 
        }

        //O que é preciso mostrar na tela e como deve ser mostrado
        $minha_arvore = $espacos . $estrelas . $char_estrela . $estrelas . "\n";
        echo $minha_arvore;

        //Verificar a necessidade de váriaveis de controle e/ou se precisam reiniciar
        $contador_espacos = $contador_espacos - 1;
        $contador_estrelas = $contador_estrelas + 1;
        $minha_arvore = "";
        $espacos = "";
        $estrelas = "";
    }
?>