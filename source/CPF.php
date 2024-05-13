<?php

class CPF
{
  private $numero;

  public function recuperaNumero(): string
  {
    return $this->numero;
  }

  // public function __construct(string $numero)
  // {
  //   $numero = filter_var($numero.FILTER_VALIDATE_REGEXP, [
  //     'options' => [
  //       'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$'
  //     ]
  //     ]);
  //     if ($numero === false) {
  //       print "Cpf inválido";
  //       exit();
  //     }
  //     $this->numero = $numero;
  //   // fazer de uma forma diferente depois "< 12"
  // }

}
