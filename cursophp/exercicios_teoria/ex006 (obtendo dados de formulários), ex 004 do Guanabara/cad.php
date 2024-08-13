<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main>
        <h2>Resultado Final</h2>
        <?php
 
            /*SUPERGLOBAIS
            $_GET
            $_POST -> se o formulário usa get no método, o var_dump($_POST não retorna nada, e vice-versa)
            $_REQUEST ->  funciona se usar tanto get quanto post, pq é uma junção de $_GET, $_POST e $_COOKIES
            var_dump($_GET);
            */
            $nome = $_GET["nome"] ?? "Sem nome"; //$nome é variável e o nome de dentro do $_GET é o name do formulário, e esse ?? é "se não achar nome, usar o "Sem nome"
            $sobrenome = $_GET["sobrenome"] ?? "Desconhecido";
            echo "<p> É um prazer te conhecer, <strong>$nome $sobrenome</strong>. Este é o meu site!";
        ?>
        <br>
        <!--Código para voltar para a página anterior-->
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior.</a></p>
    </main>
</body>
</html>