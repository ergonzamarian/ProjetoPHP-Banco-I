<?php

class Conta
{
    //definir dados da conta

    private float $saldo;
    public int $numeroConta;

    public function __construct(float $saldo, int $numeroConta)
    {
        $this->saldo = $saldo;
        $this->numeroConta = $numeroConta;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function setSaldo(float $saldo): void
    {
        $this->saldo = $saldo;
    }

    public function getNumeroConta(): int
    {
        return $this->numeroConta;
    }

    public function setNumeroConta(int $numeroConta): void
    {
        $this->numeroConta = $numeroConta;
    }


    public function sacar(float $valorASacar): void
    {
        if($valorASacar > $this->conta){
            echo "Valor indiponivel para saque";
            return;
        }
        $this->conta -= $valorASacar;

    }
    public function depositar(float $valorADepositar): void
    {
        if($valorADepositar < 0){
            echo "Valor a depositar deve ser positivo.";
            return;
        }
        $this->conta+= $valorADepositar;


    }
    public function transferir(float $valorATransferir, conta $contaDestino): void
    {
        if($valorATransferir > $this->conta){
            echo "Saldo insuficiente para Transferência.";
            return;
        }
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);

    }


}

