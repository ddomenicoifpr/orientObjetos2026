<?php

class Locadora {

    //Atributos
    private $totalBicicletas;
    private $bicicletasAlugadas;

    //Construtor
    public function __construct($totalBicicletas) {
        $this->totalBicicletas = $totalBicicletas;
        $this->bicicletasAlugadas = 0;
    }

    //Métodos
    public function alugarBicicleta() {
        if($this->getBicicletasDisponiveis() > 0) {
            $this->bicicletasAlugadas++;
            return true;
        }

        return false;        
    }

     public function devolverBicicleta() {
        if($this->bicicletasAlugadas > 0) {
            $this->bicicletasAlugadas--;
            return true;
        }

        return false;        
    }

    public function getBicicletasDisponiveis() {
        $disp = $this->totalBicicletas - $this->bicicletasAlugadas;
        return $disp;
    }

    public function __toString() {
        $dados = sprintf("Total: %d | Alugadas: %d\n", 
            $this->totalBicicletas, $this->bicicletasAlugadas);
        return $dados;
    }


    //GETs e SETs
    //Não gerados métodos SETs, pois os atributos 
        //devem ser definidos no construtor da classe
    public function getTotalBicicletas()
    {
        return $this->totalBicicletas;
    }

    public function getBicicletasAlugadas()
    {
        return $this->bicicletasAlugadas;
    }

}

//Programa principal
$totalBic = readline("Informe o total de bicicletas disponíveis: ");

$locadora = new Locadora($totalBic);

do {
    echo "\n\nO que deseja?\n";
    echo "1: Alugar Bicicleta\n";
    echo "2: Devolver Bicicleta\n";
    echo "Outra tecla: Sair\n";

    $opcao = readline("Opção: ");

    if($opcao == 1) {
        if($locadora->alugarBicicleta()) {
            echo "Bicicleta alugada!\n";
            echo $locadora; //Classe possui o método toString
        } else 
            echo "Não há bicicletas disponíveis!\n";

    } else if($opcao == 2) {
        if($locadora->devolverBicicleta()) {
            echo "Bicicleta devolvida!\n";
            echo $locadora; //Classe possui o método toString
        } else 
            echo "Não há bicicletas alugadas!\n";

    } 
} while($opcao == 1 || $opcao == 2);