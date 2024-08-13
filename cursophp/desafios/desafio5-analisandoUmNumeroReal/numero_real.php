<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de Número Real</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
            $numero = $_REQUEST["numero"] ?? 0;

            echo "Analisando o número <strong>". number_format($numero, 3,",", ".") . "</strong> informado pelo usuário:";

            $inteiro = floor($numero);
            $fracionario =  $numero - $inteiro;

            echo "<br>  <ul><li>A parte inteira do número é <strong>" . number_format($inteiro, 0, ",", ".") . "</strong></li></ul>";
            echo "<ul><li>A parte fracionária do número é <strong>" . number_format($fracionario, 3, ",", ".") . "</strong></li></ul>"
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>