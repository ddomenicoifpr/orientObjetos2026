<?php

require_once("Instrumento.php");

class Trabalho extends Instrumento {

    public function getNotaFinal() {
        $notaTrab = $this->nota * 1.2; //Adiciona 20% a nota 
    
        if($notaTrab < 10)
            return $notaTrab;
        
        return 10;
    }

    public function getTipo() {
        return "Trabalho";
    }

}