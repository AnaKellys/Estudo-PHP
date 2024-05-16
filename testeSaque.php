<?php

use Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular};
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
$conta->sacar(100);

print $conta->recuperarSaldo();