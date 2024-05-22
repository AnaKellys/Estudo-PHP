<?php

function function1()
{
  print 'Entrei na function1' . PHP_EOL;
  try {
    function2();
    //Para pegar qualquer exception é só:
    // catch (Exception) = assim vail pegar qualquer coisa que for uma exceção.

    // } catch (RuntimeException | DivisionByZeroError $problem) {

  } catch (Exception $problem) {
    print $problem->getMessage() . PHP_EOL;
    print $problem->getLine() . PHP_EOL;
    print $problem->getTraceAsString() . PHP_EOL;
  }

  print 'Saindo da function1' . PHP_EOL;
}

function function2()
{
  print 'Entrei na function2' . PHP_EOL;

  throw new BadFunctionCallException('Essa é a msg');

  print 'Saindo da function2' . PHP_EOL;
}

print 'Iniciando o programa' . PHP_EOL;
function1();
print 'Finalizando o programa' . PHP_EOL;



// /**
//  * @throws Exception
//  */
// function funcaoQueLancaExcecao()
// {
// }

// function outraFuncao()
// {
//   funcaoQueLancaExcecao();
// }
