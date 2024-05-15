<?php
class Aqui
{
  private string $cpfTitular;
  private string $nomeTitular;
  private float $saldo;
  public static $numeroDeContas = 0;

  public function __construct(string $conta)
  {
    print "teste";
  }
}

$novaConta = new Aqui(conta: "aqui");
