<?php

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Endereco;


require_once 'autoload.php';

$conta = new Conta(
    new Titular(
        new Cpf('123.456.789-10'),
        'Gean Lucas',
        new Endereco(cidade: 'Petrópolis', bairro: 'bairro teste', rua: 'Rua lá', numero: '37')
    ),
    1
);

$conta->deposita(valorADepositar: 500);
$conta->saca(valorASacar:100);

echo $conta->recuperaSaldo();