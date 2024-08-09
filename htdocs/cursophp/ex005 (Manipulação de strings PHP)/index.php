<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de strings PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Manipução de strings PHP</h1> 
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

    <h2>Heredoc</h2>

    <h2>Nowdoc</h2>
</body>
</html>