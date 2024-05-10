<?php

$nome = 'Leonardo';

// Recebe o endereço de um valor na memoria do computador e altera o valor
// O caracter "&" é refente a um espaço na memoria. 
function alteraParaAna(&$nome) {
  $nome = 'Ana';
}
alteraParaAna($nome);
print $nome;

// OU 
// function alteraParaAna()
// {
//   return "Ana";
// }

// $nome = alteraParaAna();
// print $nome;