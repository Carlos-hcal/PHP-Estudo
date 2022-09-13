<?php

    /* As decisões serão tomadas a partir de determinadas variáveis, para isso teremos
    que imaginar um tipo de entrada, aqui nessa documentação usamos como exemplo uma
    festa. criamos um sistema de segurança para definir quem entra */

    $idade = 20;
    $numeroDePessoas = 2;

    echo "Você só pode entrar se tiver mais do que 18 anos ou " ;
    echo "a partir de 16 anos acompanhado" . PHP_EOL;

    if ($idade >= 18 ) {
        echo "Você tem $idade anos. Pode entrar sozinho.";
    } elseif ($idade >= 16 && $numeroDePessoas > 1) {
        echo "Você tem $idade anos, está acompanhado(a), então pode entrar.";
    } else {
        echo "Você só tem $idade anos. Você não pode entrar.";
    }

    echo PHP_EOL;
    echo "Adeus!";

?> 