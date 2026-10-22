<?php

require_once("Instrumento.php");

class Participacao extends Instrumento {

    public function getNotaFinal() {
        return $this->nota;
    }

    public function getTipo() {
        return "Participação";
    }

}