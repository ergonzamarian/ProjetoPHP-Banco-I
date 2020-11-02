<?php

class Titular
{
    private string $cpfTitular;
    private string $nomeTitular;

    public function __construct(string $cpfTitular, string $nomeTitular)
    {
        $this->cpfTitular = $cpfTitular;
        $this->nomeTitular = $nomeTitular;
        $this->validarNome($nomeTitular);

    }

    public function getCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    public function setCpfTitular(string $cpfTitular): void
    {
        $this->cpfTitular = $cpfTitular;
    }

    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function setNomeTitular(string $nomeTitular): void
    {
        $this->nomeTitular = $nomeTitular;
    }

    private function validarNome(string $nomeTitular): void
    {
        if(strlen($nomeTitular)< 5){
            echo "Nome deve conter pelo menos 5 carcteres";
            exit();
        }

    }

}