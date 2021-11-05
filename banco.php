<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta(cpfTitular: '123.456.789-10', nomeTitular: 'Gean Lucas');
$primeiraConta->depositar(valorADepositar: 500);
$primeiraConta->sacar(valorASacar: 300);


echo $primeiraConta->recuperarSaldo() . PHP_EOL;
echo $primeiraConta->recuperarCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;

$segundaConta = new Conta(cpfTitular: '321.645.987-15', nomeTitular: 'Liziane');
$terceiraConta = new Conta(cpfTitular: '321.645.987-15', nomeTitular: 'Maria Eduarda');

unset($terceiraConta);

echo Conta::recuperaNumeroDeContas();