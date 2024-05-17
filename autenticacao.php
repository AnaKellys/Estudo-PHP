<?php

use Banco\Modelo\CPF;
use Banco\Modelo\Funcionario\Diretor;
use Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Diretor(
  'João',
  new Cpf('568.123.478-01'),
  10000
);

$autenticador->tentaLogin($umDiretor,'1224');