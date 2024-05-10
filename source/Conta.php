<?php

/* nesse arquivo tem uma "forma". Que é a class, serve para moldar o objeto,
  faz com que ele percorra só o que foi pedido. */

// $umaNovaConta = new conta(); // aqui poodemos guardar o endereço para encontrar onde a conta foi criada.

class Conta
{
  private string $cpfTitular;
  private string $nomeTitular;
  private float $saldo = 0;
  // A recomendação é ter apenas propriedades privadas e métodos públicos

  public function __construct(string $cpfTitular, string $nomeTitular)
  {
    $this->cpfTitular = $cpfTitular;
    $this->$nomeTitular = $nomeTitular;
    $this->saldo = 0;
  }

  // isso é um método, pois método é uma função que se localiza dentro de uma class
  public function sacar(float $valorASacar): void
  {
    //  '$this' referência atual
    if ($valorASacar > $this->saldo) {
      print "Saldo indisponível";
      return;
    }
    $this->saldo -= $valorASacar;
  }

  public function depositar(float $valorADepositar): void
  {
    if ($valorADepositar < 0) {
      print "Valor precisa ser positivo";
      return;
    }
    $this->saldo += $valorADepositar;
  }

  // Valor por referência
  public function transferir(float $valorATransferir, Conta $contaDestino): void
  {
    if ($valorATransferir > $this->saldo) {
      print "Saldo indisponível";
      return;
    }
    $this->sacar($valorATransferir);
    $contaDestino->depositar($valorATransferir);
  }

  public function recuperarSaldo(): float
  {
    return $this->saldo;
  }

  // public function defineNomeTitular(string $nome): void
  // {
  //   $this->nomeTitular = $nome;
  // }

  public function recuperarNomeTitular(): string
  {
    return $this->nomeTitular;
  }

  // public function defineCpfTitular(string $cpf): void
  // {
  //   $this->cpfTitular = $cpf;
  // }

  public function recuperarCpfTitular(): string
  {
    return $this->cpfTitular;
  }
}



// $primeiraConta = new Conta();

// $primeiraConta->cpfTitular = '123.456.789-10';
// $primeiraConta->nomeTitular = 'ana';
// $primeiraConta->saldo = 120;

// $primeiraConta->sacar(50);


// $segundaConta = new Conta();

// $segundaConta->cpfTitular = '123.456.789-25';
// $segundaConta->nomeTitular = 'ana kelly';
// $segundaConta->saldo = 1240;

// $primeiraConta->transferir(50, $segundaConta);

// var_dump($primeiraConta);
// var_dump($segundaConta);