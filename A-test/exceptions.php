<?php

function divide()
{
  
  print 'início função' . PHP_EOL;

  try {
    mensagem1();
  } catch (RuntimeException $problem) {
    print $problem->getMessage() . PHP_EOL;
    print $problem->getLine() . PHP_EOL;
  } catch (DivisionByZeroError $nada) {
    print $nada->getMessage() . PHP_EOL;
    print $nada->getLine() . PHP_EOL;
  }

  print 'fim função' . PHP_EOL;
  
}

function mensagem()
{
  throw new RuntimeException('Aqui RuntimeException');
}

function mensagem1()
{
  throw new DivisionByZeroError('Aqui DivisionByZeroError');
}



print 'Iniciando' . PHP_EOL;
divide();
print 'Final' . PHP_EOL;