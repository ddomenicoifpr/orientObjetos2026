<?php

require_once("modelo/Pais.php");
require_once("modelo/Jogador.php");

$pais = new Pais();
$pais->setNome("Brasil");
$pais->setContinente("América do Sul");
$pais->setTitulos(5);
//print_r($pais);

$jogador = new Jogador();
$jogador->setNome("Neymar");
$jogador->setPosicao("Atacante");
$jogador->setNumero(10);
$jogador->setPais($pais);

echo "Nome do jogador: " . $jogador->getNome() . "\n";
echo "Posição do jogador: " . $jogador->getPosicao() . "\n";
echo "Número do jogador: " . $jogador->getNumero() . "\n";
echo "País do jogador: " . $jogador->getPais()->getNome() . "\n";


//Com o toString na classe Pais
echo "País do jogador: " . $jogador->getPais() . "\n";





