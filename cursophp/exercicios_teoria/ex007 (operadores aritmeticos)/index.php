<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações Aritméticas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Operações Aritméticas</h1>
    <?php 
        echo "Em JavaScript, se tentar \"2\" + \"2\", o resultado seria \"22\", certo? Acontece que em PHP vai virar 4, inteiro, porque os operadores de concatenação (.) e de adição (+) são diferentes. Exemplo: ";

        echo "OLHAR NO CÓDIGO (linha 13)";
        $resultado = "2" + "2";
        echo "<br> $resultado";

        echo "<br><br> CURIOSADE:";
        echo "<br> Nas versões anteriores, da 7 para trás, era possível somar strings, daria em 0 porque o php não reconhecia número então assumia que o valor era 0.";
        echo "<br> E também somava números do tipo \"10 abóboras + 101 dalmatas\"";
    ?>

    <h2>OPERADORES ARITMÉTICOS</h2>
    <?php
        echo "Exemplos"; 
        echo "<br>ADIÇÃO -> +";
        $resultado =  6 + 3;
        echo "<br> 6 + 3 = $resultado";

        echo "<br><br>SUBTRAÇÃO -> -";
        $resultado = 6 - 3;
        echo "<br> 6 - 3 = $resultado";
        
        echo "<br><br>MULTIPLICAÇÃO -> *";
        $resultado = 6 * 3;
        echo "<br> 6 * 3 = $resultado";

        echo "<br><br>DIVISÃO REAL -> /";
        $resultado = 6 / 3;
        echo "<br>6 / 3 = $resultado";

        echo "<br><br>MÓDULO -> %";
        $resultado =  6 % 3;
        echo "<br>6 % 3 = $resultado";

        echo "<br><br>EXPONENCIAÇÃO -> **";
        $resultado = 6 ** 3;
        echo "<br> 6 ** 3 = $resultado";

    ?>

    <h1>Expressões Aritméticas</h1>
    <h2>Ordem de Precedência</h2>
    <?php 
        echo "Funciona igual à Matemática. A seguir tem a ordem de prioridade, de baixo para cima:";
        echo "<br>1º: **";
        echo "<br>2º: *, / e % têm a mesma prioridade";
        echo "<br>3º: + e -";

        echo "<br><br>Existe uma forma de mudar a ordem de precedência: usando parenteses. Exemplo: ";
        $resultado = 50 / 2 + 3 ** 2;
        echo "<br> 50 / 2 + 3 ** 2 = $resultado";
        echo "<br> MAAAAAAS se colocar um parênteses no meio, muda: ";
        $resultado = 50 / (2 + 3) ** 2;
        echo "<br>  50 / (2 + 3) ** 2 = $resultado";
    ?>

    <h1>Funções Matemáticas</h1>
    <h2>Valor absoluto</h2>
    <?php 
        echo "Função abs() -> valor absoluto, ou seja, sem o sinal";
        $resultado = abs(-2000);
        echo '<br>$resultado = abs(-2000)';
        print("<br>A resposta é $resultado");
    ?>

    <h2>Conversão de bases</h2>
    <?php 
        echo "Função base_convert()";
        $resultado = base_convert(1011, 2, 10); //funciona da seguinte forma (número a ser convertido, a base em que está, base para qual quero converter)
        echo '<br> $resultado = base_convert(1011, 2, 10);';
        echo "Funciona da seguinte forma: base_convert(número a ser convertido, base atual, base para qual quero converter)";
        print("<br> A resposta é $resultado");
    ?>

    <h2>Funções de arredondamento</h2>
    <?php 
        echo "Três funções que servem para coisas diferentes: ";
        echo "<br>ceil() -> arredondamento para cima (ceil significa teto)";
        echo "<br> floor() -> arredonda para baixo (floor é chão";
        echo "<br>round() -> arredondamento aritmético comum (round significa arredondamento)";
    ?>

    <h2>Cálculo da hipotenusa</h2>
    <?php 
        echo "Funciona para calcular a hipotenusa a partir das bases";
        echo "<br> hypot();"
    ?>

    <h2>Divisão inteira</h2>
    <?php 
        echo "Para divisão normal usamos /, divisão com resto usamos o mod (%), e para divisões em que encontramos o número mais próximo, usamos a função intdiv();. Exemplo: ";
        $resultado = 5 / 2;
        print("<br>5 / 2 = $resultado");

        $resultado = 5 % 2;
        print("<br> 5 % 2 = $resultado");

        $resultado = intdiv(5, 2);
        print("<br> intdiv(5 , 2) = $resultado");
        echo "<br>OBS: lê-se intdiv(número que será dividido, número pelo qual será dividido).";
    ?>

    <h2>Min e Max</h2>
    <?php 
        echo "Nesse aqui a gente encontra o menor e o maior valor entre um determinado intervalo ou vários valores. Exemplo: ";
        $resultado = min(5, 6, 2, 6, 9, 15);
        echo '<br> $resultado = min(5, 6, 2, 6, 9, 15);';
        echo " ou seja, dentre os valores 5, 6, 2, 6, 9 e 15, o menor é: $resultado";
        $resultado = max(5, 6, 2, 6, 9, 15);
        echo '<br> $resultado = max(5, 6, 2, 6, 9, 15);';
        echo " ou seja, dentre os valores 5, 6, 2, 6, 9, 15, o maior é $resultado";

    ?>
    
    <h2>Valor de Pi por função e constante</h2>
    <?php 
        echo "Por constante: ";
        $resultado = M_PI;
        echo ' $resultado = M_PI;';
        print("<br>A resposta é $resultado");

        echo "<br><br>Por função: ";
        $resultado = pi();
        echo '$resultado = pi();';
        printf("<br>A resposta é $resultado");
    ?>

    <h2>Função de Potencia - Power</h2>
    <?php 
        echo "Essa função era usada antes, quando ainda não dava pra usar ** para elevar à potência";
        $resultado = pow(5, 2);
        echo '<br>$resultado = pow(5, 2);';
        print("<br>O resultado é $resultado");

        echo "<br>OBS: quando usa a função power, perde a ordem de precedência, mas aí é só arruma com parenteses também."
    ?>

    <h2>Funções trigonométricas: Seno, Cosseno e Tangente</h2>
    <?php 
        echo "As funções são as seguintes: ";
        echo "<br>Seno -> sin();";
        echo "<br>Cosseno -> cos();";
        echo "<br>Tangente -> tan()";
    ?>

    <h2>Função de raiz quadrada</h2>
    <?php 
        echo "Dois jeitos de calcular a raiz quadrada: ";
        echo "Função sqrt();";
        $resultado = sqrt(81);
        echo '<br>$resultado = sqrt(81);';
        print("<br>A raiz quadrada de 81 é $resultado");

        echo "<br><br>Ou podemos calcular com potência: ";
        $resultado = 81 ** (1/2);
        echo '<br>$resultado = 81 ** (1/2);'; 
        print("<br>A resposta é $resultado");

        echo "OBS: daí muda de acordo com a sua prioridade, no caso de raiz cúbica, como não tem função, deveríamos usar: ";
        echo ' $resultado = 27 ** (1/3)';
    ?>
</body>

</html>