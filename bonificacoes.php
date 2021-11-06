<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario;

$umFuncionario = new Funcionario(
    'Gean Lucas', 
    new Cpf('123.456.789-10'), 
    'Desenvolvedor', 
    1000.0
);

$umaFuncionaria = new Funcionario(
    'ishdaisjfh',
    new Cpf('987.65.321-10'),
    'Desenvolvedor',
    3000.0
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);

echo $controlador->recuperaTotal();