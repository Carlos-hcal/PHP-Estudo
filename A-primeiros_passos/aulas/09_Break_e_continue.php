<?php

    //Agora vamos aprender há pular um numero dentro desse looping e a parar o looping em determinado numero:

        $contador = 1;
        $resultado = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);

        for ($i = 1; $i <= count($resultado) ; $i++) { 
            if ($i == 13) {

    //Use o "continue" para pular um numero e seguir com o looping.

        continue;
    }

    //Substitua o continue por "break" para parar o looping no numero desejado.

        echo "#$i" . PHP_EOL;

    }

    //Com o Elemento "count" contamos todos os elementos dentro de uma Array.

        echo count($resultado);

?>