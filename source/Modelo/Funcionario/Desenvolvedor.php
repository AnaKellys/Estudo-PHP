<?php

namespace Banco\Modelo\Funcionario;
// use Banco\Modelo\Funcionario\Funcionario;

class Desenvolvedor extends Funcionario
{

  // public function calculaBonificacao(): float
  // {
  //   return $this->recuperaSalario() * 0.05;
  // }


  public function sobeDeNivel()
  {
    return $this->recebeAumento($this->recuperaSalario() * 0.75);
  }

  public function calculaBonificacao(): float
  {
    return 500.00;
  }


}