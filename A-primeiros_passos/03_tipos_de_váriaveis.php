<?php

    /* Tipos de variaveis existentes em PHP:

            Em PHP não temos declarações de de variáveis com seu respectivo tipo,
        o PHP trata de "declarar" o tipo de acordo com o que a gente manda pra ele.
        Sendo assim, precisamos declarar essas variaveis com seus respectivos valores 
        para que não ocorra erros. */

    /* String:

            Uma string é um conjunto de caractes de qualquer tipo. É o "vale tudo" da programação.
        Qualquer coisa entra ali. Pode colocar letra, número, símbolo, enfim, aceita tudo. Por
        exemplo o CPF, em uma string nunca vai ocasionar um erro pois ela aceita tanto números
        inteiros quanto numeros quebrados. */

            $texto = "Olá mundo";
                echo gettype($texto) . PHP_EOL;

    /* Inteiro:

            Um inteiro é essencialmente um número, pode ser positivo ou negativo. Inteiro é
        representado pelo tipo "integer" em PHP e na grande maioria das linguagens. Um integer
        tem 8 bits, portanto tem um limite mínimo e um máximo. Mas, para as coisas mais triviais
        integer dá conta do recado. */

            $idade = 21;
                echo gettype($idade) . PHP_EOL;

    /* Float ou Dooble:

            Este é um outro tipo de variável que só aceita número. Mas, diferente do tipo
        inteiro, aqui podemos colocar números com casas decimais. Como em integer, este tipo
        também tem limites, mas vai ser bem complicado de você chegar neles. Ele pode suportar
        até 14 casas decimais. Um integer suporta 5 dígitos no máximo. num site comum
        dificilmente usa-se float. Você só vai usar isso em coisas mais elaboradas como sistemas
        de controle de estoque por exemplo. */

            $salario = 1000.101;
                echo gettype($salario) . PHP_EOL;

    /* Booleano:

            Um valor booleano é a síntese do sistema binário, onde baseamos a informática. O 
        sistema binário contsite em representar tudo em apenas duas formas: 0 = desligado e
        1 = ligado. Tudo em informatica basea-se nisso. Internamente, é composto de sequências
        de zeros e uns. Pois bem, o booleano é precisamente essa representação. Ele serve
        para determinar se algo é verdadeiro ou falso. 0 para falso e 1 para verdaeiro.
        Diversas funções do PHP retornam booleanos. Eles normalmente são usados nos verificadores
        de condição if/else. */

            $verdadeiro = true;
            $falso = false;
                echo gettype($verdadeiro) . PHP_EOL;

    /* Array:

            Array é uma das variáveis mais usadas em PHP. Consiste basicamente num conjunto de
        variáveis com um indexador e um valor. São pares, chaves ou indexaores e valor.
        Funciona como um índice de um livro: para cada página listada no índice temos um
        capítulo. um Array é desse jeito. Existem dois tipos de urrays: array unidimenssional e array
        multidimensional. */

            $pessoaCarlos = [

                'nome' => 'Carlos', 
                'cpf' => '27139812',
            ];
            
            $array = array(
                0 => 'zero',
                1 => 'um',
                2 => 'dois',
            );

            echo $pessoaCarlos . PHP_EOL;
            echo $array . PHP_EOL;

    /* Array Multidimensional:

            Array multidimensional é um array que contem outros arrays. Agora é como se você
        estivesse em uma biblioteca. Imagine cada estante como sendo um array, daí cada prateleira
        como sendo um outro array dentro do array estante, e em cada prateleira os livros são
        arrays do array de prateleira. Os capítulos do livro são os elementos do array livro. Para
        denominar as chaves ou indexadores de um array podemos usar basicamente strings.
        Números também são  usados. Várias funções retornam arrays então é bom saber
        trabalhar com eles. Eles facilitam nossa vida consideravelmente em várias aplicações. */

            $Biblioteca = [

                'Estante_1' => ['prateleira' => 'livro_terror', 'capítulo' => '27139812'],
                'Estante_2' => ['prateleira' => 'livro_aventura', 'capítulo' => '29742789374']

            ];

            echo $Biblioteca['livro_terror']['prateleira'] . PHP_EOL;
            echo $prateleira['capítulo'] . PHP_EOL;



    /* Objeto:

            Objeto é um tipo de variável exclusivo de programação orientada a objeto. É algo
        parecido com um array. Só que um objeto é composto de métodos e propriedades. Esses
        métodos e propriedades são determinados em classes. Um objeto é a instância de uma
        classe,ou seja, é a classe pronta para ser usada. Mas não irei me aprofundar em 
        objetos pois isso já é algo mais avançado. */


            class Carlinhos {

                public $namorada;
                public $animaisEstimação;


                public function __construct($namorada, $animaisEstimação)
                {
                    $this -> namorada = $namorada;
                    $this -> animaisEstimação = $animaisEstimação;
                }

            }
            $madu = new Carlinhos('', 'gatinhos');
            $alexandre = new Carlinhos('Mari', 'catioro');
            $pessoa = new Carlinhos('madu', 'gatineos');
            $josnei = new Carlinhos('joana', 'não tem');

            var_dump($madu);

    
    /* Resource:

            Resource é um tipo especial de variável. Ele é gerado para controlarmos arquivos,
        conexões de internet e conexão com banco de dados. Quando fazemos uma consulta no
        banco de dados normalmente retorna-se um resource que deve ser trabalhado por outras
        funções. */