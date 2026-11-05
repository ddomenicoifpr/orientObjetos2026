<?php

/*
//Testar a conexão com o banco de dados
require_once("util/Conexao.php");

$conexao = Conexao::getConexao();
print_r($conexao);
*/

require_once("modelo/ClientePF.php");

do {
    echo "\n\n---CADASTRO DE CLIENTES----\n";
    echo "1- Inserir Cliente PF\n";
    echo "0- Sair\n";

    $opcao = readline("Informe a opção: ");

    switch($opcao) {
        case 1:
            //Inserir
            $clientePF = new ClientePF();
            $clientePF->setNomeCompleto(readline("Informe o nome completo: "));
            $clientePF->setNomeSocial(readline("Informe o nome social: "));
            $clientePF->setCpf(readline("Informe o CPF: "));
            $clientePF->setEmail(readline("Informe o e-mail: "));

            
            break;


        case 0:
            echo "Programa encerrado!\n";
            break;

        default:
            echo "Opção inválida!\n";

    }


} while($opcao != 0);