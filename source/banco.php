<?php

// incluir e executar um arquivo PHP. Garante que o arquivo seja incluído apenas uma vez.
// require_once 'source/Modelo/Conta/Conta.php';
// require_once 'source/Modelo/Endereco.php';
require_once 'source/Modelo/Pessoa.php';
// require_once 'source/Modelo/Conta/Titular.php';
// require_once 'source/Modelo/CPF.php';

use Banco\Modelo\Conta\Titular;
use Banco\Modelo\Endereco;
use Banco\Modelo\CPF;
use Banco\Modelo\Conta\Conta;


$endereco = new Endereco(cidade: 'Acreúna', bairro: 'Aquele', rua: 'minha rua', numero: '128');
$vini = new Titular(new CPF('123.456.789.10'), nome: "Vini Alves", endereco: $endereco);
var_dump($vini);
$primeiraConta = new Conta($vini);
$primeiraConta->depositar(500);
$primeiraConta->sacar(100);  // -> acessar  

print $primeiraConta->$Conta::recuperarNomeTitular() . PHP_EOL; //obs.
print $primeiraConta->$Conta::recuperarCpfTitular() . PHP_EOL; //obs.
print $primeiraConta->recuperarSaldo() . PHP_EOL;

$patricia = new Titular(new CPF("698.549.548-10"), nome: "Patricia", endereco: $endereco);
$segundaConta = new Conta($patricia);
var_dump($patricia);

$outroEndereco = new Endereco(cidade: 'A', bairro: 'B', rua: 'C', numero: '1D');
$outra = new Conta(new Titular(new CPF("698.156"), nome: "rerere", endereco: $outroEndereco));
// unset($segundaConta);

// como o atributo está privado não consigo acessar desta forma.
// print Conta::$numeroDeContas;
// para conseguir trazer o valor, faz uma função. chamei de "recuperarNumeroDeContas()"
print Conta::recuperarNumeroDeContas();

// Isso é uma instância.
// $teste = new Conta();