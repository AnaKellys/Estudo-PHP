<?php

// incluir e executar um arquivo PHP. Garante que o arquivo seja incluído apenas uma vez.
require_once 'source/Conta.php';
require_once 'source/Titular.php';
require_once 'source/CPF.php';



$vini = new Conta(new Titular(new CPF('123.456.789.10'), nome: "Vini Alves"));
var_dump($vini);
$primeiraConta->depositar(500);
$primeiraConta->sacar(100);  // -> acessar  

print $primeiraConta->recuperarNomeTitular() . PHP_EOL;
print $primeiraConta->recuperarCpfTitular() . PHP_EOL;
print $primeiraConta->recuperarSaldo() . PHP_EOL;

$Patricia = new Conta(new Titular(new CPF("698.549.548-10"), nome:"Patricia"));
var_dump($Patricia);

$outra = new Conta(new Titular(new CPF("698."), nome: "rerere"));
unset($segundaConta);

// como o atributo está privado não consigo acessar desta forma.
// print Conta::$numeroDeContas;
// para conseguir trazer o valor, faz uma função. chamei de "recuperarNumeroDeContas()"
print Conta::recuperarNumeroDeContas();

// Isso é uma instância.
// $teste = new Conta();