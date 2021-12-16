<?php

require __DIR__ . '/../vendor/autoload.php';

use App\ContasTipo\ContaPoupanca;
use App\Contratos\DadosContaBancariaInterface;
use App\Contratos\OperacoesContaBancariaInterface;

function executarOperacoes(OperacoesContaBancariaInterface $conta): void
{
    echo $conta->obterSaldo();
    echo PHP_EOL;

    echo $conta->depositar(50);
    echo PHP_EOL;
    
    echo $conta->obterSaldo();
    echo PHP_EOL;
    
    echo $conta->sacar(30);
    echo PHP_EOL;
    
    echo $conta->obterSaldo();
    echo PHP_EOL;
}

function exibirDados(DadosContaBancariaInterface $conta): void
{    
    echo "Banco: " . $conta->getBanco();
    echo PHP_EOL;
    
    echo "Ag./Conta: " . $conta->getNumeroAgencia() . "/" . $conta->getNumeroConta();
    echo PHP_EOL;

    echo "Titular: " . $conta->getNomeTitular();
    echo PHP_EOL;

    echo "--------------------------------------------";
    echo PHP_EOL;
}

$conta = new ContaPoupanca(
    'Banco do Brasil', // banco
    'Gustavo Fraga', // nomeTitular
    '8244', // numeroAgencia
    '57354-10', // numeroConta
    0 // saldo
);

exibirDados($conta);
executarOperacoes($conta);
