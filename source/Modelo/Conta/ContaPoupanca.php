<?php

namespace Banco\Modelo\Conta;
// isso é uma sobreescrita de métodos

class ContaPoupanca extends Conta
{
protected function percentualTarifa(): float
{
  return 0.03;
}
}