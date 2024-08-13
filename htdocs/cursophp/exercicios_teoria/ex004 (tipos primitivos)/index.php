<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Tipos Primitivos em PHP</h1>
    <h2>Escalares</h2>
    <?php 
        $sobrenome = "Leal";
        $idade = 22;
        $peso = 70.2;
        $casada = false;

        echo "$sobrenome é string, $idade anos é inteiro, $peso kg é float ou double, $casada";
    ?>

    <h3>Teste de tipos primitivos com números</h3>
    <?php 
        //começa com 0x = hexadecimal
        //começa com 0b = binário
        //começa com 0 = octal

        $num_hexadecimal = 0x10;
        $num_binario = 0b10;
        $num_octal = 010;
        $num_notacao_e = 3e2;

        echo "O valor da variável num_hexadecimal = 0x10 é $num_hexadecimal. <br>";
        echo " O valor da variável num_binario = 0b10 é $num_binario. <br>";
        echo " O valor da variável num_octal = 010 é $num_octal.";
        echo " O valor da varíavel num_notacao_e é $num_notacao_e, pq é a mesma que 3 x 10^2."
    ?>

    <h3>Mostrando o "var_dump()"</h3>
    <?php 
        echo "VAR DUMP <br>";
        $v = 300; //v de variável
        var_dump($v);
        echo "<br>";

        $v1 = true;
        var_dump($v1);
        echo "<br>";

        $v2 = "Nestor";
        var_dump($v2);
        echo "<br><br>";

        //também é possível fazer COERÇÃO -> forçar uma variável de um tipo virar outro tipo, exemplo:
        echo "COERÇÃO: originalmente, a variável foi declarada com 24.8, mas eu coagi a variável a transformar em int, por isso arredondou para 24 e o tipo está escrito como int<BR>";
        $v3 = (integer) 24.8; //a gente sabe que isso aqui é um float, mas vai sair como int no var_dump()
        var_dump($v3);
        echo "<br><br>";

        echo"Booleano normalmente não aparece quando a gente escreve o tipo pelo echo pq quando é true ele printa 1, e quando é falso aparece como 0 ou null";
    ?>
    <p>O "var_dump($v)" mostra o tipo da variável fora dos parênteses, e dentro deles o valor armazenado na variável.</p>
    <p>No caso da string, o valor que se encontra dentro dos parênteses é a quantidade de caracteres, e fora, entre aspas, o valor armazenado na string.</p>


    <h2>Compostos</h2>
    <h3>Vetores</h3>
    <?php 
        $vetor = [6, 2, 9, 3, 5];
        var_dump($vetor);
        echo "<br><br> No resultado aparece [x] -> int(y), onde x é a posição dentro do vetor, que começa no 0, o tipo na frente do y é o tipo da variável e o y é o valor armazenado na respectiva posição."
    ?>
    <h3>Object</h3>
    <?php 
        class Pessoa{
            private string $nome;
        }

        $p = new Pessoa;

        var_dump($p);

        echo "<br><br> Esse eu ainda não sei explicar ainda, mas é alguma coisa orientada a objetos"
    ?>

    <h2>Especiais</h2>
</body>
</html>