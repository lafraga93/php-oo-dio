<?php

require __DIR__ . '/../vendor/autoload.php';

use App\ContaBancaria;

$conta = new ContaBancaria(
    'Banco do Brasil', // banco
    'Gustavo Fraga', // nomeTitular
    '8244', // numeroAgencia
    '57354-10', // numeroConta
    0 // saldo
);

var_dump($conta->exibirDadosDaConta());
