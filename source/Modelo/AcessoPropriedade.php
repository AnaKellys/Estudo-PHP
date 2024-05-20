<?php

trait AcessoPropriedade 
{

  public function __get(string $nomeAtributo)
  {
    $metodo = 'recupera' . ucfirst($nomeAtributo);
    return $this->$metodo;
  }
}