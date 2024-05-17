<?php

use Banco\Modelo\{CPF, Endereco};
use Banco\Modelo\Funcionario\{Diretor, Gerente};
use Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Gerente(
  'João',
  new Cpf('568.123.478-01'),
  10000
);

//  PARA TITULAR
// $autenticador = new Autenticador();
// $umDiretor = new Titular(
  // new Cpf('568.123.478-01'),
  // 'João',
  // new Endereco("vae",'vfseg','bed','cvs')
// );

$autenticador->tentaLogin($umDiretor,'1224');