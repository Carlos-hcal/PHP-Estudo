<?php 

    /* Arrays:

        Uma array nada mais é do que uma sequência de informações, normalmente
        (mas não sempre) do mesmo tipo - por exemplo, uma lista de inteiros.
        Existem duas firmas de iinformarmos o PHP de que esses valores devem ser lidos
        como uma array. A primeira delas é com "array()":

        Nas versões mais recentes do PHP, não precisamos mais escrever a palavra array,
        bastando utilizarmos colchetes para rodear o nosso vetor:
    */

        $idadeList = [21, 23, 19, 25, 30, 41, 18];

    /*
        Mas e se quisermos acessar os itens dessa lista? A principal característica de um 
        vetor é que, além de seus valores, ele possui chaves/índices para acessá-los. Por 
        padrão, se não definirmos esses índices, eles começam com o número 0. Por exemplo, 
        se quisermos a $primeiraIdade, podemos passar o índice 0 entre colchetes:
    */

        $idadeList = [21, 23, 19, 25, 30, 41, 18];
        $umaIdade = $idadeList[2];
        
        
        
        echo "$umaIdade";
?>