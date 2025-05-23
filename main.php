<?php

// Saldo Atual
$titular = "Matheus Duarte";
$saldoAtual = 1000;

function titular($titular, $saldoAtual) {
    echo "***************** \n";
    echo "Titular: $titular \n";
    echo "R$$saldoAtual \n";
    echo "*****************";
}

function opcoes(){
    echo "
1. Consultar saldo atual
2. Sacar valor
3. Depositar valor
4. Sair \n";
}

while (true) {
    titular($titular, $saldoAtual);
    opcoes();


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
        titular($titular, $saldoAtual);
        
        echo "Qual valor você quer sacar? \n";
        $saque = (float) fgets(STDIN);
            if ($saque > $saldoAtual) {
                echo "Saldo insuficente \n";
            } else {
                $saldoAtual = $saldoAtual - $saque;
                echo "Seu saldo atual é de: R$$saldoAtual";
            }
    }

    // 3. Depositar Valor
    if ($numero == 3) {
        titular($titular, $saldoAtual);

        echo "Qual valor você quer depositar? \n";
        $deposito = (float) fgets(STDIN);

        $saldoAtual += $deposito;
        echo "Seu saldo atual é de: R$$saldoAtual";

    opcoes();

        $numero = (float) fgets(STDIN);
    }   

    // 4. Sair
    if ($numero == 4) {
        echo "Saindo...";
        break;
    }
}
