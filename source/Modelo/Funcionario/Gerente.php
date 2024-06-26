<?php

namespace Banco\Modelo\Funcionario;
// use Banco\Modelo\Funcionario\Funcionario;
use Banco\Modelo\Autenticavel;

class Gerente extends Funcionario implements Autenticavel
{

  public function podeAutenticar(string $senha): bool
  {
    return $senha === '4321';
  }

  public function calculaBonificacao(): float
  {
    return $this->recuperaSalario();
  }
}