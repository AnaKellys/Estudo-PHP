<?php

namespace Banco\Modelo;

// Funcionario é uma Pessoa
class Funcionario extends Pessoa
{
  private string $cargo;

  public function __construct(string $nome, CPF $cpf, string $cargo, float $salario)
  {
    parent::__construct($nome, $cpf);
    $this->cargo = $cargo;
    $this->salario = $salario;
  }

  public function recuperaCrago()
  {
    return $this->cargo;
  }

  // Método setter
  public function alteraNome(string $nome):void
  {
    $this->validaNomeTitular($nome);
    $this->nome = $nome;
  }
  
  public function recuperaSalario(): float
  {
    return $this->salario;
  }

  public function calculaBonificacao(): float
  {
    return $this->salario * 0.1;
  }
}