<?php

require_once("modelo/Filme.php");

function buscarPorGenero($filmes, $genero) {
    foreach($filmes as $f) {
        if($genero == $f->getGenero())
            return $f;
    }
    return null;
}


$filmes = array();

//1- Leitura dos 5 Filmes
for($i=1; $i<=5; $i++) {
    $filme = new Filme();

    $filme->setTitulo(readline("Informe o título: "));
    $filme->setGenero(readline("Informe o gênero: "));
    $filme->setDiretor(readline("Informe o diretor: "));
    $filme->setAnoLancamento(readline("Informe o ano: "));

    array_push($filmes, $filme);
}

//2- Realização da busca
do {
    echo "\n\n----MENU-----\n\n";
    echo "1- Busca por título\n";
    echo "2- Busca por gênero\n";
    echo "0- Sair\n";

    $opcao = readline("Informe a opção: ");

    switch($opcao) {

        case 1: 
            //2.1- Busca por título - Implementada localmente
            $titulo = readline("Informe o título: ");

            $filmeEncontrado = false;

            foreach($filmes as $f) {
                if($titulo == $f->getTitulo()) {
                    $filmeEncontrado = true;
                    echo $f;
                    break;
                } 
            }
            if(! $filmeEncontrado)
                echo "Filme não encontrado!\n";

            break;

        case 2:
            //2.2- Busca por gênero - Implementada na função buscarPorGenero()
            $genero = readline("Informe o gênero: ");

            $filme = buscarPorGenero($filmes, $genero);
            if($filme != null)
                echo $filme;
            else
                echo "Filme não encontrado!\n";


            break;


        case 0:
            echo "Bye bye\n";
            break;

        default:
            echo "Opção inválida!\n";
    }


} while($opcao != 0);