<?php

require_once("Cliente.php");

class ClientePF extends Cliente {

    //Atributos
    private string $nomeCompleto;
    private string $cpf;

    //Métodos 
    public function getNome() {
        return $this->nomeCompleto;
    }

    public function getNroDoc() {
        return $this->cpf;
    }

    public function getTipo() {
        return "Pessoa Física";
    }

    //GETs e SETs
    public function getNomeCompleto(): string
    {
        return $this->nomeCompleto;
    }

    public function setNomeCompleto(string $nomeCompleto): self
    {
        $this->nomeCompleto = $nomeCompleto;

        return $this;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }
}