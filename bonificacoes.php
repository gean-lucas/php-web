<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Funcionario\Desenvolvedor;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\EditorVideo;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\Cpf;

$umFuncionario = new Desenvolvedor(
    'Gean Lucas', 
    new Cpf('123.456.789-10'),
    1000.0
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
    'Liziane',
    new Cpf('987.65.321-10'),
    3000.0
);

$umDiretor = new Diretor(
    'Ana Maria',
    new Cpf('123.654.789-10'),
    5000
);

$umEditor = new EditorVideo(
    'Paulo',
    new Cpf('456789123-10'),
    1500
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();