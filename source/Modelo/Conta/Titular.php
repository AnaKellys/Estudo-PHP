<?php

namespace Banco\Modelo\Conta;
use Banco\Modelo\Pessoa;
use Banco\Modelo\CPF;
use Banco\Modelo\Endereco;

// minha class Titular extende até pessoas, quer dizer que agora Titular também vai ter tudo o qu Pessoa tem.
// Titular é uma Pessoa 
class Titular extends Pessoa
{
  private Endereco $endereco;

  public function __construct(CPF $cpf, string $nome, Endereco $endereco)
  {
    // herança sendo aplicada n alinha de baixo.
    parent::__construct($nome, $cpf);
    // Iniciar um atributo
    $this->endereco = $endereco;

  }

  public function recuperaEndereco(): Endereco
  {
    return $this->endereco;
  }

}
