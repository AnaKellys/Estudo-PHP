<?php

namespace Banco\Modelo\Conta;
use Banco\Modelo\Pessoa;
use Banco\Modelo\CPF;
use Banco\Modelo\Endereco;
use Banco\Modelo\Autenticavel;

// minha class Titular extende até pessoas, quer dizer que agora Titular também vai ter tudo o qu Pessoa tem.
// Titular é uma Pessoa 
class Titular extends Pessoa implements Autenticavel
{


  public function __construct(CPF $cpf, string $nome)
  {
    // herança sendo aplicada n alinha de baixo.
    parent::__construct($nome, $cpf);
    // Iniciar um atributo

  }
  // public function recuperaEndereco(): Endereco
  // {
  //   return $this->endereco;
  // }

  public function podeAutenticar(string $senha): bool
  {
    return $senha === 'abcd';
  }
}
