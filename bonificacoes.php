<?php

require_once 'autoload.php';

use Banco\Service\ControladorDeBonificacoes;
use Banco\Modelo\CPF;
use Banco\Modelo\Funcionario\{Gerente, Diretor,  Desenvolvedor};
use Banco\Modelo\Funcionario\EditorVideo;


$umFuncionario = new Desenvolvedor(
  'Vinicius',
  new CPF('589.698.587-68'),
  1000
);

$umFuncionario->sobeDeNivel();


$umaFuncionaria = new Gerente(
  'Patricia',
  new CPF('589.698.587-28'),
  3000
);

$umDiretor = new Diretor(
  'Ana Paula',
  new CPF('123.856.975.16'),
  5000
);

$umEditor = new EditorVideo(
  'Paulo',
  new CPF('785.568.123-78'),
  1500
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

print $controlador->recuperaqTotal();
