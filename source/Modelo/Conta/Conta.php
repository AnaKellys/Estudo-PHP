<?php

namespace Banco\Modelo\Conta;

abstract class Conta
{
  private Titular $titular;
  protected float $saldo;
  private static int $numeroDeContas = 0;

  public function __construct(Titular $titular)
  {
    $this->titular = $titular;
    $this->saldo = 0;

    self::$numeroDeContas++;
  }

  public function __destruct()
  {
    self::$numeroDeContas--;
  }

  public function sacar(float $valorASacar): void
  {

    $tarifaSaque =  $valorASacar * $this->percentualTarifa();
    $valorSaque = $valorASacar + $tarifaSaque;
    if ($valorSaque > $this->saldo) {
      throw new SaldoInsuficienteException($valorASacar, $this->saldo);
    }
    $this->saldo -= $valorSaque;
  }

  public function depositar(float $valorADepositar): void
  {
    if ($valorADepositar < 0) {
      print "Valor precisa ser positivo";
      return;
    }
    $this->saldo += $valorADepositar;
  }

  public function transferir(float $valorATransferir, Conta $contaDestino): void
  {
    if ($valorATransferir > $this->saldo) {
      throw new \InvalidArgumentException();
    }
    $this->sacar($valorATransferir);
    $contaDestino->depositar($valorATransferir);
  }

  public function recuperarSaldo(): float
  {
    return $this->saldo;
  }

  public function recuperaNomeTitular(): string
  {
    return $this->titular->recuperaNome();
  }

  public function recuperaCpfTitular(): string
  {
    return $this->titular->recuperaCpf();
  }

  public static function recuperarNumeroDeContas(): int
  {
    return self::$numeroDeContas;
  }

  // Para ter um método abstract precisso que a classe também seja. 
  abstract protected function percentualTarifa(): float;
  //quando se fala em uma classe abstract, quer izer que eu tenho uma class que não está totalmente pronta
  // portanto preciso extends ela 

  // se em algum momento quero abrigar as minhas outras classe tenha um método, eu coloco ele am abstract.
// toda class que herdar de conta tem que ter esse método
}

//Pilares:  Abstração, emcapsulamento, herança, polimorfismo