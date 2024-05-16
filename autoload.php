<?php

spl_autoload_register(function (string $nomeClasse) {
  // source\Modelo\Endereco.php;
  $caminhoArquivo = str_replace('Banco', 'source', $nomeClasse);
  // $caminhoArquivo = str_replace(search:'\\', replace:DIRECTORY_SEPARATOR, $caminhoArquivo);
  $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
  $caminhoArquivo .= '.php';

  if (file_exists($caminhoArquivo)) {
    require_once $caminhoArquivo;
  }
});

// .= o que é?