<?php

require_once("Instrumento.php");

class Prova extends Instrumento {

    public function getNotaFinal() {
        $notaProva = $this->nota * 1.3; //Adiciona 30% a nota 
    
        if($notaProva < 10)
            return $notaProva;
        
        return 10;
    }

    public function getTipo() {
        return "Prova";
    }

}