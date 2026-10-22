<?php

abstract class Instrumento {

    protected float $nota;

    //Métodos
    abstract public function getNotaFinal();
    abstract public function getTipo();

    public function __toString() {
        return $this->getTipo() . " = " . $this->getNotaFinal();
    }
    
    //GETs e SETs
    public function getNota(): float
    {
        return $this->nota;
    }

    public function setNota(float $nota): self
    {
        $this->nota = $nota;

        return $this;
    }
}