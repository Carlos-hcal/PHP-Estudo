<?php

  /* Como fazer um looping:

      Vamos precisar de uma variavel com um numero, no caso foi escolhido o 1,
    com isso iremos exibir um contador que tera como proposito somar a variavel a cada resultado apresentado,
    até chegar ao numero 15 e colocaremos uma função de quebra de linha  para cada resultado apresentado ou seja (PHP_EOL) 
    
  Existem algumas variações de laços, dentre elas:


    # "while" que possui uma condição de entrada

    # "do-while" que possui uma condição de permanência (sempre executa o bloco pelo menos uma vez)

    # "for" que possui a declaração de uma variável, uma condição entrada e o increment

    # Dentro do bloco do laço podemos pular uma interação com o comando "continue"

    # Com o comando "break" podemos sair do laço

    # A variável "contador" normalmente se chama "i" */ 

      $contador = 1;
      $resultado = 15;

      for ($i = $contador; $i <= $resultado; $i++){ 
          echo $i . PHP_EOL;
      }

?>

 




