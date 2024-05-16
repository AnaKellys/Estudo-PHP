<?php

require_once 'autoload.php';

use Banco\Service\ControladorDeBonificacoes;
use Banco\Modelo\CPF;
use Banco\Modelo\Funcionario\{Funcionario, Gerente, Diretor};


$umFuncionario = new Funcionario(
  'Vinicius',
  new CPF('589.698.587-68'),
  'desenvolvedor',
  1000
);

$umaFuncionaria = new Gerente(
  'Patricia',
  new CPF('589.698.587-28'),
  'Gerente',
  3000
);

$umDiretor = new Diretor(
  'Ana Paula',
  new CPF('123.856.975.16'),
  'Diretor',
  5000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);

print $controlador->recuperaqTotal();