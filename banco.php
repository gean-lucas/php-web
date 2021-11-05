<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Conta\Conta;


$endereco = new Endereco(cidade: 'Rio de Janeiro', bairro: 'Santa Teresa', rua: 'Rua Ocidental', numero: '60');
$gean = new Titular(new Cpf(cpf: '123.456.789-10'), nome: 'Gean Lucas', endereco: $endereco);
$primeiraConta = new Conta($gean);
$primeiraConta->depositar(valorADepositar: 500);
$primeiraConta->sacar(valorASacar: 300);


echo $primeiraConta->recuperaSaldo() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;

$liziane = new Titular(new Cpf(cpf: '321.645.987-15'), nome: 'Liziane', endereco: $endereco);
$segundaConta = new Conta($liziane);

$outroEndereco = new Endereco(cidade: 'Tangua', bairro: 'centro', rua: '21', numero: '12');
$maria = new Titular(new Cpf(cpf: '321.645.987-15'), nome: 'Maria Eduarda', endereco: $outroEndereco);
$terceiraConta = new Conta($maria);

unset($terceiraConta);
var_dump($segundaConta);

echo Conta::recuperaNumeroDeContas();