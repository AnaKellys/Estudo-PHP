<?php

class Titular 
{
  private string $cpf;
  private string $nome;

  public function __construct(string $cpf, string $nome)
  {
    // Iniciar um atributo
    $this->cpf = $cpf;
    $this->nome = $nome;
  }

  public function recuperaCpf()
  {
    
  }
}