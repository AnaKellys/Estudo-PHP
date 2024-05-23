<?php 

try {
  print 'Executando' . PHP_EOL;
  // throw new Exception('Exceção aqui');
} catch (Throwable $e) {
  print "Caindo no catch" . PHP_EOL;
} finally {
  print "finally" . PHP_EOL;
}
