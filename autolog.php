<?php

spl_autoload_register(function (string $nomeCompletoDaClasse) {
    $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoDaClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php';

    if (file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;
    }
});

//DIRECTORY_SEPARATOR: comoca a "/" dependendo o sistema operacional
//str_replace : troca uma string por outra

//include só produzirá um aviso (E_WARNING) e o script continuará
//require irá produzir um erro fatal (E_COMPILE_ERROR) e parar o script
//require_once verifica se  o arquivo ja foi incluido e só executa se a resposta for não
