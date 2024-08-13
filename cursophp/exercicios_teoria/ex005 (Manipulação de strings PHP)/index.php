<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de strings PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Manipulação de strings PHP</h1> 
    <h2>Double quoted</h2>
    <?php 
        echo "Com as aspas duplas existe intepretação do conteúdo da string, então por isso a gente consegue ver o emoji no seguinte echo:";

        echo "<br> PHP \u{1f418}"; //\u{} sintaxe para colocar emoji

        echo "<br><br>*Existe também a Concatenação entre strings, que é importante. A represtentação da concatenação é um ponto . ";
        echo "<br>Exemplo:";
        echo " Curso" . "PHP";
    ?>

    <h2>Single quoted</h2>
    <?php 
        echo 'Não há intepretação de conteúdo, então aquele elefantinho que apareceu no double quoted não vai aparecer aqui, apenas o código:';
        echo '<br>PHP \u{1f418}';

        echo "<br><br>Exemplo:";

        $nome = "Stéffane";
        echo "<br>Double quoted: Olá $nome";
        echo '<br>Single quoted: Olá $nome';

        echo '<br><br>*Aqui a concatenação é igual ao do double quoted, mesmo símbolo'
    ?>

    <h2>Mais sobre Concatenação</h2>
    <?php  
        const ESTADO = "RJ"; //em caso de constante, precisamos necessariamente fazer uma concatenação, porque não tem como ler dentro do echo pq não tem um $ para reconhecer
        echo "Moro no ESTADO";
        echo "<br>Moro no " . ESTADO;
    ?>

    <h2>Exemplos com aspas duplas dentro de aspas simples e vice-versa</h2>
    <?php 
        $nome = "Rodrigo";
        $sobrenome = "Nogueira";

        echo "No seguinte exemplo, vai funcionar perfeitamente por causa do double quote, que interpreta o que está dentro do echo:";
        echo "<br>$nome 'Minotauro' $sobrenome";

        echo "<br><br>Já neste caso, não vai ser interpretado porque estou usando single quote, mas mesmo assim vai ler as aspas duplas normalmente:";
        echo '<br>$nome "Minotauro" $sobrenome';
    ?>

    <h2>*Sequência de Escape - contra-barra aspas</h2>
    <?php 
        echo "Para poder usar aspas duplas dentro de aspas duplas, para quotar mesmo, é só colocar contra-barra aspas - olhar no código para ver na prática. Exemplo: ";
        $nome = "Rodrigo";
        $sobrenome = "Nogueira";

        echo "<br>$nome \"Minotauro\" $sobrenome";

        echo "<br><br>Para aspas simples, a única sequência de escape que funciona é o <strong> \'</strong> ";
        echo "<br><br>Já para as aspas duplas, existem vários, sendo eles:";
        echo "<br>\\n -> nova linha, quebra linha para baixo";
        echo "<br>\\t -> tabulação horizontal";
        echo "<br>Detalhe: Para o \\n e o \\t não funcionam dentro do HTML, apenas para o PHP, pq o de HTML é p br";
        echo "<br> \\\ -> mostrar a barra invertida, inclusive no código dessa parte tem 3 contra-barras pq queria mostrar o exemplo";
        echo "<br> \\$ -> sinal de cifrão";
        echo "<br> \\u{} -> Codepoint Unicode (para mostrar um símbolo, um emoji ou qualquer coisa do tipo";

        echo "<br><br>Exemplo (olhar no código também, linha 71):";
        $nome = "Stéffane";
        $sobrenome = "Leal";
        $apelido = "Stezinha";

        echo "<br>$nome $apelido $sobrenome";
        echo "<br>Usando as aspas duplas: ";
        echo "<br>$nome \"$apelido\" $sobrenome ";

    ?>

    <h2>Heredoc</h2>
    <?php 
        echo "É uma maneira diferente de printar coisas na tela, olhe no código como funciona (linha 86)";
        $curso = "PHP";
        $ano = date('Y');

        //então funciona da seguinte maneira, a sintaxe é diferente do echo normal
        echo <<< FRASE
            <br>Estou estudando 
                $curso em $ano
            FRASE;

        echo "<br><br>Outro exemplo: ";
        $nome = "Sté";
        $curso = "Estágio";
        $ano = date('M/Y');
        
        echo <<< TESTE
            <br> Olá $nome! Como está esse início de $curso em $ano? 
                Espero que esteja aprendendo bastante! 
                Beijos!
            TESTE;
    
    ?>

    <h2>Nowdoc</h2>
    <?php 
        echo "A grande diferença entre o Heredoc e o Nowdoc é que o Nowdoc funciona como um echo com single quote, ou seja, não interpreta o que tem dentro, por isso na hora de abrir o nowdoc a gente coloca aspas simples entre a \"tag\". Exemplo: ";

        $nome = "Sté";
        $curso = "Estágio";
        $ano = date("M/Y");

        echo <<< 'TESTE'
            <br> Olá $nome! Como está esse início de $curso em $ano? 
                Espero que esteja aprendendo bastante! 
                Beijos!
            TESTE;
    ?>
</body>
</html>