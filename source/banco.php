<?php

// incluir e executar um arquivo PHP. Garante que o arquivo seja incluído apenas uma vez.
require_once 'source/Conta.php';

$primeiraConta = new Conta(cpfTitular: '123.456.789.10', nomeTitular: "Vini Alves");
var_dump($primeiraConta);
$primeiraConta->depositar(500);
$primeiraConta->sacar(100);  // -> acessar  

print $primeiraConta->recuperarNomeTitular() . PHP_EOL;
print $primeiraConta->recuperarCpfTitular() . PHP_EOL;
print $primeiraConta->recuperarSaldo() . PHP_EOL;

$segundaConta = new Conta(cpfTitular: "698.549.548-10", nomeTitular: "Patricia");
var_dump($segundaConta);

$outra = new Conta(cpfTitular: "698.", nomeTitular: "rerere");
unset($segundaConta);

// como o atributo está privado não consigo acessar desta forma.
// print Conta::$numeroDeContas;
// para conseguir trazer o valor, faz uma função. chamei de "recuperarNumeroDeContas()"
print Conta::recuperarNumeroDeContas();

// Isso é uma instância.
// $teste = new Conta();