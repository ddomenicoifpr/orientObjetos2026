<?php

require_once("modelo/Participacao.php");
require_once("modelo/Prova.php");
require_once("modelo/Trabalho.php");

$instrumentos = array();

//Leitura dos dados
for($i=1; $i<=3; $i++) {
    echo "\n\n----Instrumento " . $i . "-----\n";
   
    $instrumento = null;
    while($instrumento == null) {
        $tipo = readline("Informe o tipo (1-Prova, 2-Trabalho, 3-Participação): ");
        
        switch ($tipo) {
            case 1:
                $instrumento = new Prova();
                break;

            case 2:
                $instrumento = new Trabalho();
                break;

            case 3:
                $instrumento = new Participacao();
                break;

            default:
                echo "Tipo inválido!\n";
        }
    }
    
    $instrumento->setNota(readline("Informe a nota: "));
    array_push($instrumentos, $instrumento);
}

//Notas dos instrumentos
$somaNotas = 0;
foreach($instrumentos as $i => $inst) {
    echo $i+1 . ": " . $inst . "\n";

    //Calcular soma das notas
    $somaNotas += $inst->getNotaFinal();
}

//Calcular a média final
$media = $somaNotas / 3;
echo "A média final é: " . $media . "\n";