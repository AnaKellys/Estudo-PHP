<?php

namespace Banco\Modelo\Funcionario;
use Banco\Modelo\Funcionario\Funcionario;

class Gerente extends Funcionario
{

  public function calculaBonificacao(): float
  {
    return $this->recuperaSalario();
  }
}