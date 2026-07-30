<?php

require_once("Pais.php");

class Jogador {

    private string $nome;
    private string $posicao;
    private int $numero;
    private Pais $pais;

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getPosicao(): string
    {
        return $this->posicao;
    }

    public function setPosicao(string $posicao): self
    {
        $this->posicao = $posicao;

        return $this;
    }

    public function getNumero(): int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getPais(): Pais
    {
        return $this->pais;
    }

    public function setPais(Pais $pais): self
    {
        $this->pais = $pais;

        return $this;
    }
}