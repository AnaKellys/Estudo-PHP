<?php

namespace Banco\Service;
use Banco\Modelo\Funcionario\Diretor;

class Autenticador
{
  // Polimorfismo
  public function tentaLogin(Autenticavel $autenticavel, string $senha): void
  {
    if ($autenticavel->podeAutenticar($senha)){
      print "ok, logado no sitema";
      return;
    } 
    print "senha incorreta";
  }
}
