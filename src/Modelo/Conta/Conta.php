<?php

namespace Alura\Banco\Modelo\Conta;

class Conta
{
    private Titular $titular;
    private float $saldo = 0;
    private static $numeroDeContas = 0;
    /**
     *  @var int $tipo 1 == Conta corrente; 2 == Poupança 
     */
    
    private $tipo;

    public function __construct(Titular $titular, int $tipo)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        $this->tipo = $tipo;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function saca(float $valorASacar)
    {
        if ($this->tipo == 1){
            $tarifaSaque = $valorASacar * 0.05;
        } else {
            $tarifaSaque = $valorASacar * 0.03;
        }
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível" . PHP_EOL;
            return;
        }
        
        $this->saldo -= $valorSaque;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo" . PHP_EOL;
            return;
        } 
        
        $this->saldo += $valorADepositar;
    }

    public function transferi(float $valorATransferir, Conta $constaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo 'Saldo indisponível';
            return;
        } 

        $this->saca($valorATransferir);
        $constaDestino->deposita($valorATransferir);
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

}