<?php

namespace Banco\Modelo;
abstract class Pessoa
{
  use AcessoPropriedade;

  // protected nele pode ser alterado pela sua pripria class e pelas class filhas. onde estiver o extends
  protected string $nome;
  private CPF $cpf;

  public function __construct(string $nome, CPF $cpf)
  {
    $this->validaNomeTitular($nome);
    $this->nome = $nome;
    $this->cpf = $cpf;
  }

  public function recuperaNome(): string
  {
    return $this->nome;
  }

  public function recuperaCpf(): string
  {
    return $this->cpf->recuperaNumero();
  }

  final protected function validaNomeTitular(string $nomeTitular)
  {
    // "strlen()" percorre a string e informa a quantidade de caracteres.
    if (strlen($nomeTitular) < 5) {
      print "Nome precisa ter no mínimo 5 caracteres";
      exit();
    }
  }
}