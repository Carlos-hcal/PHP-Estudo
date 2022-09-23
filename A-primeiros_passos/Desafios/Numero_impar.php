<?php

    /* Calculo de números ímpares: 

        Nesse desafio utilizamos a estrutura de repetição "for", dentro, temos uma variavel
        denominada "$contador com o valor correspondente a "1" e outra variavel com o mesmo 
        nome só que com o valor 100. Definimos também que o valor do segundo contador sempre
        ficara abaixo de 100, ou seja, apenas chegara até 99.

        Então dentro desse looping eu verifico com "if", ou seja, se dividindo o contador por 2
        o resto que for diferente de 0 vai ser exibido nesse mesmo contador em numeros impares,
        se a divisão por 0 for igual a 2 ele não fara nada, agora se a divisão por 2 for 
        diferente de 0 então sera exibido no contador no numero atual da divisão. 
    */

            for ($contador = 1; $contador <100; $contador++) {
                if ($contador % 2 != 0) {
                    echo $contador . PHP_EOL;
                }
            }

?>