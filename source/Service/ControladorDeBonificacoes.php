<?php

namespace Banco\Service;

use Banco\Modelo\Funcionario;

class ControladorDeBonificacoes
{
  private $totalBonificacoes = 0;

  public function adicionaBonificacaoDe(Funcionario $funcionario)
  {
    $this->totalBonificacoes += $funcionario->calculaBonificacao();
  }

  public function recuperaqTotal():float
  {
    return $this->totalBonificacoes;
  }
}