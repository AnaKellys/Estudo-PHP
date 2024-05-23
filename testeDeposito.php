<?php

use Banco\Modelo\Conta\ContaCorrente;
use Banco\Modelo\Conta\Titular;
use Banco\Modelo\CPF;
use Banco\Modelo\Endereco;

require_once 'autoload.php';

$contaCorrente = new ContaCorrente(
  new Titular(
    new CPF('568.123.123.12'),
    'Vini Dias', 
    new Endereco('cidade', 'bairro', 'rua', 'Nº')
    )
);

try {
$contaCorrente->depositar(-100);
} catch (InvalidArgumentException $exception) {
  print 'Valor precissa ser positivo'. PHP_EOL;
}