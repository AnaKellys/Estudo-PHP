<?php

// incluir e executar um arquivo PHP. Garante que o arquivo seja incluído apenas uma vez.
// require_once 'source/Modelo/Conta/Conta.php';

require_once 'autoload.php';

use Banco\Modelo\{Endereco, CPF};
use Banco\Modelo\Conta\{Conta, Titular};
use Banco\Modelo\Conta\ContaCorrente;

$endereco = new Endereco(cidade: 'Acreúna', bairro: 'Aquele', rua: 'minha rua', numero: '128');
$vini = new Titular(new CPF('123.456.789.10'), nome: "Vini Alves");
var_dump($vini);
$primeiraConta = new ContaCorrente($vini);
$primeiraConta->depositar(500);
$primeiraConta->sacar(100);  // -> acessar  

print $primeiraConta->recuperaNomeTitular() . PHP_EOL; //obs.
print $primeiraConta->recuperaCpfTitular() . PHP_EOL; //obs.
print $primeiraConta->recuperarSaldo() . PHP_EOL;

$patricia = new Titular(new CPF("698.549.548-10"), nome: "Patricia");
$segundaConta = new ContaCorrente($patricia);
var_dump($patricia);

$outroEndereco = new Endereco(cidade: 'A', bairro: 'B', rua: 'C', numero: '1D');
$outra = new ContaCorrente(new Titular(new CPF("698.156"), nome: "rerere",));
// unset($segundaConta);

// como o atributo está privado não consigo acessar desta forma.
// print Conta::$numeroDeContas;
// para conseguir trazer o valor, faz uma função. chamei de "recuperarNumeroDeContas()"
print Conta::recuperarNumeroDeContas();

// Isso é uma instância.
// $teste = new Conta();