<?php

require_once("IRadio.php");

class Radio implements IRadio {

    //Atributos
    private float $frequencia;
    private bool $ligado;

    //Métodos
    public function __construct() {
        $this->ligado = false;
    }

    //Implementação dos métodos da interface
    public function ligar() {
        $this->ligado = true;
    }

    public function desligar() {
        $this->ligado = false;
    }

    //GETs e SETs
    public function getFrequencia(): float
    {
        return $this->frequencia;
    }

    public function setFrequencia(float $frequencia): self
    {
        $this->frequencia = $frequencia;

        return $this;
    }

    public function isLigado(): bool
    {
        return $this->ligado;
    }

    public function setLigado(bool $ligado): self
    {
        $this->ligado = $ligado;

        return $this;
    }
}