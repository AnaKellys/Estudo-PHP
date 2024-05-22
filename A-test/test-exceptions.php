<?php

// criando uma exceção

class TestExceptions  extends Exception // DomainException
{
  
  public function exibe()
  {
    print 'Ana';
  }

}

try{
  throw new TestExceptions;
} catch (TestExceptions $a) {
  $a->exibe();
}
