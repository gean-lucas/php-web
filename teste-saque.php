<?php

use Alura\Banco\Modelo\Conta\{Titular, ContaCorrente, ContaPoupanca};
use Alura\Banco\Modelo\{Cpf, Endereco};


require_once 'autoload.php';

$conta = new ContaCorrente(
    new Titular(
        new Cpf('123.456.789-10'),
        'Gean Lucas',
        new Endereco(cidade: 'Petrópolis', bairro: 'bairro teste', rua: 'Rua lá', numero: '37')
    )
);

//$conta->transfere();
$conta->deposita(valorADepositar: 500);
$conta->saca(valorASacar:100);

echo $conta->recuperaSaldo();