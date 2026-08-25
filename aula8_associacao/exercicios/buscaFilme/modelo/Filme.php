<?php

class Filme {

    //Atributos
    private string $titulo;
    private string $diretor;
    private int $anoLancamento;
    private string $genero;

    public function __toString() {
        $dados = $this->titulo . " | ";
        $dados .= $this->diretor . " | ";
        $dados .= $this->anoLancamento . " | ";
        $dados .= $this->genero . "\n";
        return $dados;
    }

    
    //GETs e SETs
    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getDiretor(): string
    {
        return $this->diretor;
    }

    public function setDiretor(string $diretor): self
    {
        $this->diretor = $diretor;

        return $this;
    }

    public function getAnoLancamento(): int
    {
        return $this->anoLancamento;
    }

    public function setAnoLancamento(int $anoLancamento): self
    {
        $this->anoLancamento = $anoLancamento;

        return $this;
    }

    public function getGenero(): string
    {
        return $this->genero;
    }

    public function setGenero(string $genero): self
    {
        $this->genero = $genero;

        return $this;
    }
}
