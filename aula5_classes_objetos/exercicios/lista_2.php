<?php

class Cidade {

    //Atributos
    public $nome;
    public $habitantes;
    public $area;
    public $altitude;
    public $estado;

    //Métodos
    function retornaDados() {
        $dados = sprintf("%s|%d|%dkm²|%dm|%s\n", 
            $this->nome, $this->habitantes, $this->area, $this->altitude, $this->estado);
        
        return $dados;
    }

} //FIM classe Cidade


//Programa principal

for($i=1; $i<=5; $i++) {
    echo "\n\nCidade " . $i . ":\n";

    $cidade = new Cidade();
    $cidade->nome = readline("Informe o nome: ");
    $cidade->habitantes = readline("Informe o número de habitantes: ");
    $cidade->area = readline("Informe a área: ");
    $cidade->altitude = readline("Informe a altitude: ");
    $cidade->estado = readline("Informe o estado: ");

    echo "\n";
    echo $cidade->retornaDados();
}