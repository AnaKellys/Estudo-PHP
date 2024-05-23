<?php

namespace Banco\Modelo\Conta;

class SaldoInsuficienteException extends \DomainException
{
  public function __construct(float $valorASacar, float $saldoAtual)
  {
    $mensagem = "Você tentou sacar $valorASacar, mas tem apenas $saldoAtual em conta." . PHP_EOL;
    parent::__construct($mensagem);
  }
}