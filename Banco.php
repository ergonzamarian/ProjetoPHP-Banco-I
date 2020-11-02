<?php

require_once 'src/model/Conta.php';
require_once 'src/model/Titular.php';


$contaErgon = new Conta(200, 9864);
$titularDaConta1 = new Titular('654.987.456-98','Ergon');

echo "Número da Conta: " .$contaErgon -> getNumeroConta(). PHP_EOL;
echo "Titular: ". $titularDaConta1 -> getNomeTitular(). PHP_EOL;
echo "CPF Titular: ". $titularDaConta1 -> getCpfTitular(). PHP_EOL;
echo "Saldo Titular: ". $contaErgon -> getSaldo(). PHP_EOL;

$contaErgon->depositar(500);


