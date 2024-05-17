<?php 
use Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Acreúna', 'qualquer', 'rua', '45');
$outroEndereco = new Endereco('Rio', 'Centro', 'outra rua', '50');