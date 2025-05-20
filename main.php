<?php

// Saldo Atual
$titular = "Matheus Duarte";
$saldoAtual = 1000;

while (true) {
    echo "***************** \n";
    echo "Titular: $titular \n";
    echo "***************** \n";

    echo "
    1. Consultar saldo atual
    2. Sacar valor
    3. Depositar valor
    4. Sair \n";

        $numero = (float) fgets(STDIN);

    //Não aceitar opção nao existente
    if ($numero > 4 || $numero < 1) {
        echo "Opção invalida \n\n";
    }

    //  1. Consultar Saldo
    if ($numero == 1) {
        echo ("seu saldo é de: R$$saldoAtual \n");
    }

    // 2. Sacar Valor
    if ($numero == 2) {
        
        echo "***************** \n";
        echo "Titular: $titular \n";
        echo "Saldo Atual: R$$saldoAtual \n";
        echo "***************** \n";
        
        echo "Qual valor você quer sacar? \n";
        $saque = (float) fgets(STDIN);
            if ($saque > $saldoAtual) {
                echo "Saldo insuficente";
            } else {
                $saldoAtual = $saldoAtual - $saque;
                echo "Seu saldo atual é de: R$$saldoAtual";
            }
    }

    // 3. Depositar Valor
    if ($numero == 3) {

        echo "***************** \n";
        echo "Titular: $titular \n";
        echo "Saldo Atual: R$$saldoAtual \n";
        echo "***************** \n"; 

        echo "Qual valor você quer depositar? \n";
        $deposito = (float) fgets(STDIN);

        $saldoAtual += $deposito;
        echo "Seu saldo atual é de: R$$saldoAtual";

        echo ("
        1. Consultar saldo atual
        2. Sacar valor
        3. Depositar valor
        4. Sair \n");

        $numero = (float) fgets(STDIN);
    }   

    // 4. Sair
    if ($numero == 4) {
        echo "Saindo...";
        break;
    }
}
