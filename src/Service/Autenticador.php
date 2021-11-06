<?php

namespace Alura\Banco\Service;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha): void
    {
        if ($autenticavel->podeAutenticar($senha)) {
            echo 'Ok. Usuário logado no sistema.';
        } else {
            echo 'Ops. Senha incorreta.';
        }
    }
}