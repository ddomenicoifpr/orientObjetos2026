<?php

require_once("IRadio.php");
require_once("IRelogio.php");

class RadioRelogio implements IRadio, IRelogio {

    //Atributos
    private string $estado;

    //Métodos
    public function __construct() {
        $this->estado = "Desligado";
    }

    //Implementação dos métodos da interface
    public function ligar() {
        $this->estado = "Ligado";
    }

    public function desligar() {
        $this->estado = "Desligado";
    }

    public function mostrarHora() {
        echo date("H:i:s") . "\n";
    }

    //GETs e SETs
    public function getEstado(): string
    {
        return $this->estado;
    }

    public function setEstado(string $estado): self
    {
        $this->estado = $estado;

        return $this;
    }
}