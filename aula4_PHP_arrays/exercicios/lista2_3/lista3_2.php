<?php

//Funções
function soma(array $vetor) {
    $soma = 0;
    foreach($vetor as $v)
        $soma += $v;
    
    return $soma;
}

function qtdPares(array $vetor) {
    $qtdPares = 0;
    foreach($vetor as $v) {
        if($v % 2 == 0)
            $qtdPares++;
    }
    
    return $qtdPares;
}

function qtdImpares(array $vetor) {
    $qtdImpares = 0;
    foreach($vetor as $v) {
        if($v % 2 != 0)
            $qtdImpares++;
    }
    
    return $qtdImpares;
}

function qtdDivCinco(array $vetor) {
    $qtdDivCinco = 0;
    foreach($vetor as $v) {
        if($v % 5 == 0)
            $qtdDivCinco++;
    }
    
    return $qtdDivCinco;
}

function difMaiorMenor(array $vetor) {
    $menor = $vetor[0];
    $maior = $vetor[0];
    
    //Encontra o menor
    foreach($vetor as $v) {
        if($v < $menor)
            $menor = $v;
    }

    //Encontra o maior
    foreach($vetor as $v) {
        if($v > $maior)
            $maior = $v;
    }
    
    return $maior - $menor;
}

function qtdTresSeisNove(array $vetor) {
    $qtdTresSeisNove = 0;
    foreach($vetor as $v) {
        if($v == 3 || $v == 6 || $v == 9)
            $qtdTresSeisNove++;
    }
    
    return $qtdTresSeisNove;
}


//Programa principal
$numeros = array();

//Leitura dos números
do {
    $num = readline("Informe um número: ");

    if($num > 0) //Tratamento para não adicionar número menor que 0 (encerra a leitura)
        array_push($numeros, $num);

} while($num > 0);

//Cálculos
echo "\n\n";
echo "Soma dos números: " . soma($numeros) . "\n";
echo "Quantidade números pares: " . qtdPares($numeros) . "\n";
echo "Quantidade números ímpares: " . qtdImpares($numeros) . "\n";
echo "Quantidade números divisiveis por 5: " . qtdDivCinco($numeros) . "\n";
echo "Diferença entre o maior e menor valor: " . difMaiorMenor($numeros) . "\n";
echo "Quantidade de números 3, 6 ou 9: " . qtdTresSeisNove($numeros) . "\n";
