<?php require __DIR__ . '/../vendor/autoload.php';

use App\ContaBancaria;

$conta = new ContaBancaria();
var_dump($conta->exibirDadosDaConta());
