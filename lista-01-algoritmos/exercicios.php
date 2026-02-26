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

    $valor7 = readline("Digite um valorr: ");

    $calc3 = $valor7 * 0.09;

    echo "Result8: ". $calc3;

    echo "<hr>";

// ------------------------------
// Exercício 9
// Receber valor de um produto, calcular desconto de 7%, exibir valor original, desconto e valor com desconto
// ------------------------------

    $valor8 = readline("Digite um valor:");

    $calc5 = $valor8 * 0.07;
    $calc4 = $valor8 - $calc5;

    echo "Result9 Valor orginal: ". $valor8. "\n";
    echo "Result9 Valor Desconto: ". $calc5. "\n";
    echo "Result9 Valor com Desconto: ". $calc4. "\n";

    echo "<hr>";

// ------------------------------
// Exercício 10
// Calcular e apresentar o volume de uma caixa retangular: volume = comprimento x largura x altura
// ------------------------------



// ------------------------------
// Exercício 11
// Receber um valor, calcular e mostrar um desconto de 27%
// ------------------------------

    $valor9 = readline("Digite um valor: ");

    $calc6 = $valor9 * 0.27;

    echo "Result8: ". $calc6;

    echo "<hr>";

// ------------------------------
// Exercício 12
// Receber dois valores, calcular e apresentar a área de um trapézio
// ------------------------------

    $valor10 = readline("Digite um valor Maior: ");
    $valor11 = readline(prompt: "Digite um valor Menor: ");
    $valor12 = readline(prompt: "Digite a altura da area: ");

    $calc7 = ($valor10 + $valor11) * $valor12 / 2;

    echo "Result: ". $calc7;

    echo "<hr>";

// ------------------------------
// Exercício 13
// Ler 3 notas, calcular média ponderada (pesos: 2, 3, 5)
// ------------------------------

    $valor13 = readline("Digite um valor nota1: ");
    $valor14 = readline(prompt: "Digite um valor nota2: ");
    $valor15 = readline(prompt: "Digite um valor nota3: ");

    $calc8 = (($valor13 * 2) + ($valor14 * 3) + ($valor15 * 5)) / 10;

    echo "Result: ". $valor8;
    
    echo "<hr>";


// ------------------------------
// Exercício 14
// Receber valor de produto, acrescentar 16%, dividir em 10 parcelas, mostrar valor da parcela e valor total
// ------------------------------
        
    $valor16 = readline("Digite um valor: ");

    $calc9 = $valor16 * 16; 
    $calc10 = $calc9 / 10; 

    echo "Result: ". $calc10;
    
    echo "<hr>";

// ------------------------------
// Exercício 15
// Receber distância (km) e combustível (litros), calcular e imprimir consumo médio: Consumo médio = Km / litros
// ------------------------------

    

?>