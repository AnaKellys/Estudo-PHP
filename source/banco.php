<?php

// incluir e executar um arquivo PHP. Garante que o arquivo seja incluído apenas uma vez.
require_once './Conta.php';

$primeiraConta = new Conta(cpfTitular:'123.456.789.10', nomeTitular:"vini alves");
var_dump($primeiraConta);
$primeiraConta->depositar(500);
$primeiraConta->sacar(100);  // -> acessar  

print $primeiraConta->recuperarNomeTitular() . PHP_EOL;
print $primeiraConta->recuperarCpfTitular() . PHP_EOL;
print $primeiraConta->recuperarSaldo() . PHP_EOL;
