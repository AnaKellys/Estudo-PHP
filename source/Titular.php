<?php

require_once 'source/CPF.php';

class Titular
{
  private CPF $cpf;
  private string $nome;

  public function __construct(CPF $cpf, string $nome)
  {
    // Iniciar um atributo
    $this->cpf = $cpf;
    $this->validaNomeTitular($nome);
    $this->nome = $nome;
  }

  public function recuperaCpf(): string
  {
    return $this->cpf->recuperaNumero();
  }


  public function recuperaNome(): string
  {
    return $this->nome;
  }

  private function validaNomeTitular(string $nomeTitular)
  {
    // "strlen()" percorre a string e informa a quantidade de caracteres.
    if (strlen($nomeTitular) < 5) {
      print "Nome precisa ter no mínimo 5 caracteres";
      exit();
    }
  }

}
