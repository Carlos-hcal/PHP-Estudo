<?php

  /* Tabuada:

    Temos uma variável com um valor indefinido denominado "$multiplicador",
    mudando seu valor, definimos o fator de operação, logo abaixo, na estrutura
    de repetição "for" temos uma outra variavel definida como "$i" que também possui
    outro fator.

    A ordem dos fatores não alteram o produto.  */

      $multiplicador = 68;

      for ($i = 1; $i <= 160; $i++) {
        echo "$multiplicador x $i = " . $multiplicador * $i . PHP_EOL;
      }

?>      