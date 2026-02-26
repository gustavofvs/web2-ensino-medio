<?php

// ------------------------------
// Exercício 1
// Somar dois números e multiplicar o resultado pelo primeiro número
// ------------------------------

    $n1 = 13;
    $n2 = 22;

    $result1 = ($n1 + $n2) * $n1;

    echo "Result1: ". $result1;


    echo "<hr>";

// ------------------------------
// Exercício 2
// Ler três números (Val1, Val2, Val3), calcular a média e exibir o resultado
// ------------------------------

    $val1 = 10; $val2 = 58; $val3 = 90;

    $result2 = ($val1 + $val2 + $val3) / 3;
    
    echo "Result2: ". $result2;  

    echo "<hr>";

// ------------------------------
// Exercício 3
// Receber um valor, calcular e mostrar 15% deste valor
// ------------------------------

    $valor = readline("Q3 Digite um valor: ");
    $result3 = $valor * 0.15;

    echo "Result3: ". $result3;

    echo "<hr>";

// ------------------------------
// Exercício 4
// Receber um valor, calcular e mostrar 5% e 50% deste valor
// ------------------------------

    $valor2 = readline("Q4 Digite um valor: ");
    $result4 = $valor2 * 0.05;
    $result5 = $valor2 * 0.5;

    echo "Result4: 5%: ". $result4. " 50%: ". $result5;

    echo "<hr>";

// ------------------------------
// Exercício 5
// Ler dois números, calcular o quadrado de cada um, somar os quadrados e mostrar o resultado
// ------------------------------

    $valor3 = readline("Q5 Digite um valor: ");
    $valor4 = readline("Q5 Digite um valor: ");

    $quadrado1 = $valor3 ** 2;
    $quadrado1 = $valor4 ** 2;

    $result6 = $valor3 + $valor4;

    echo "Result5: ". $result6;

    echo "<hr>";

// ------------------------------
// Exercício 6
// Ler a velocidade em m/s, calcular e exibir em km/h
// ------------------------------

    $valor5 = readline("Q6 Digite uma velocidade em m/s: ");

    $result7 = $valor5 * 3.6;

    echo "Result6: ". $result7. " km/h";

    echo "<hr>";

// ------------------------------
// Exercício 7
// Ler altura e peso, calcular IMC e exibir para o usuário
// ------------------------------

    $valor6 = readline("Q7 Digite seu Peso: ");
    $valor7 = readline("Q7 Digite sua Altura: ");

    $calc2 = $valor6 / ($valor7 ** 2);

    echo "Result7 IMC: ". $calc2;

    echo "<hr>";
    
// ------------------------------
// Exercício 8
// Receber um valor, calcular e mostrar um desconto de 9%
// ------------------------------

// ------------------------------
// Exercício 9
// Receber valor de um produto, calcular desconto de 7%, exibir valor original, desconto e valor com desconto
// ------------------------------

// ------------------------------
// Exercício 10
// Calcular e apresentar o volume de uma caixa retangular: volume = comprimento x largura x altura
// ------------------------------

// ------------------------------
// Exercício 11
// Receber um valor, calcular e mostrar um desconto de 27%
// ------------------------------

// ------------------------------
// Exercício 12
// Receber dois valores, calcular e apresentar a área de um trapézio
// ------------------------------

// ------------------------------
// Exercício 13
// Ler 3 notas, calcular média ponderada (pesos: 2, 3, 5)
// ------------------------------

// ------------------------------
// Exercício 14
// Receber valor de produto, acrescentar 16%, dividir em 10 parcelas, mostrar valor da parcela e valor total
// ------------------------------

// ------------------------------
// Exercício 15
// Receber distância (km) e combustível (litros), calcular e imprimir consumo médio: Consumo médio = Km / litros
// ------------------------------

?>