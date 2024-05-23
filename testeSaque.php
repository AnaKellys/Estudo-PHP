<?php

use Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, SaldoInsuficienteException, Titular};
use Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaPoupanca(
  new Titular(
    new CPF('125.897.456-28'),
    'vini dias',
    new Endereco('cidade', 'bairro', 'rua tal', '156')
  )
);

$conta->depositar(500);
try {
$conta->sacar(600);
} catch (SaldoInsuficienteException $exception) {
  print "Você não tem saldo" . PHP_EOL;
  print $exception->getMessage();
}

print $conta->recuperarSaldo();