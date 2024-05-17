<?php

namespace Banco\Modelo\Funcionario;
use Banco\Modelo\{Pessoa, CPF};

// Funcionario é uma Pessoa
abstract class Funcionario extends Pessoa
{

  private $salario;

  public function __construct(string $nome, CPF $cpf, float $salario)
  {
    parent::__construct($nome, $cpf);
    $this->salario = $salario;
  }

  // Método setter
  public function alteraNome(string $nome):void
  {
    $this->validaNomeTitular($nome);
    $this->nome = $nome;
  }
  
  public function recebeAumento(float $valorAumento): void
  {
    if ($valorAumento < 0) {
      print "Aumento deve ser positivo";
      return;
    }
    $this->salario += $valorAumento;
  }

  public function recuperaSalario(): float
  {
    return $this->salario;
  }

  abstract public function calculaBonificacao(): float;
}