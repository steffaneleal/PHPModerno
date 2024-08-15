<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Retroalimentado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        //Capturando os dados do Formulário Retroalimentado
        $valor1 = $_GET['valor1'] ?? 0;
        $valor2 = $_GET['valor2'] ?? 0;

    ?>
    <main>
        <h1>Somador de Valores</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get"> <!-- nesse caso não é indicado usar o index.php no action por questões de segurança -->
            <!-- originalmente dentro do action é action="<?php echo $_SERVER['PHP_SELF']?>", mas para simplificar mudamos para short open tag -->
            <label for="valor1">Valor 1</label>
            <input type="number" name="valor1" id="id_valor1" value="<?=$valor1?>"> <!-- colocamos o value para armazenar os valores -->
            <label for="valor2">Valor 2</label>
            <input type="number" name="valor2" id="id_valor2" value="<?=$valor2?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado da Soma</h2>
        <?php 
            $soma = $valor1 + $valor2;
            print("<p>A soma entre os valores $valor1 e $valor2 é <strong>igual a $soma</strong>");
        ?>
    </section>
</body>
</html>