<?php

require_once("modelo/Pais.php");
require_once("modelo/Atleta.php");

$atletas = array();

//Iniciar a exibição do menu
do {
    echo "\n\n------MENU------\n";
    echo "1- Cadastrar atleta\n";
    echo "2- Excluir atleta\n";
    echo "3- Listar atletas\n";
    echo "0- Sair\n";
    $opcao = readline("Informe a opção: ");

    echo "\n";

    switch($opcao) {
        case 1:
            $atleta = new Atleta();
            $atleta->setNome(readline("Informe o nome: "));
            $atleta->setIdade(readline("Informe a idade: "));
            $atleta->setEsporte(readline("Informe o esporte: "));
            
            $pais = new Pais();
            $pais->setNome(readline("Informe o nome do país: "));            
            $pais->setContinente(readline("Informe o continente do país: "));
            $atleta->setPais($pais);            
            
            array_push($atletas, $atleta);
            break;

        case 2:
            foreach($atletas as $idx => $a) {
                echo $idx+1 . ") " . $a; //Executa o toString da classe Atleta
            }
            echo "\n";
            $idx = readline("Informe o índice do atleta para excluir: ");
            if($idx > 0 && $idx <= count($atletas))
                array_splice($atletas, $idx-1, 1);
            else
                echo "Índice inválido!\n";
            break;

        case 3:
            foreach($atletas as $a) {
                echo $a; //Executa o toString da classe Atleta
            }
            break;

        case 0:
            echo "Programa encerrado!\n";
            break;

        default:
            echo "Opção inválida!\n";

    }

} while($opcao != 0);