<?php

namespace Banco\Service;
use Banco\Modelo\Autenticavel;

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
