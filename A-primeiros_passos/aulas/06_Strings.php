<?php

    /* String:

        Uma string é um conjunto de caractes de qualquer tipo. É o "vale tudo" da programação.
        Qualquer coisa entra ali. Pode colocar letra, número, símbolo, enfim, aceita tudo. Por
        exemplo o CPF, em uma string nunca vai ocasionar um erro pois ela aceita tanto números
        inteiros quanto numeros quebrados. 
    */

    /* Diferença de caracteres:

        Aspas simples:

        Com as aspas simples o computador não ira reconhecer uma string dentro da linha de comando. 
    */

            $idade = 20;
                echo 'Olá mundo! Minha idade é $idade anos' . PHP_EOL;

    /* Aspas Duplas:
    
        Já com as aspas duplas a máquina reconhece que a váriavel usada possui um valor,
        assim exibindo para o usuario. 
    */

            $idade = 20;
                echo "Olá mundo! Minha idade é $idade anos" . PHP_EOL;

    /* "."(ponto):
    
        Serve para concatenar (unir) uma variavel  com a outra. 
    */        

?>