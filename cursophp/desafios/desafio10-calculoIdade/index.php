<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $ano_atual = date('Y');
        $nascimento = $_GET["nascimento"];
        $ano = $_GET["ano"];
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?= $_SERVER["PHP_SELF"]?>" method="get">
            <label for="nascimento">Em que ano você nasceu?</label>
            <input type="number" name="nascimento" id="id_nascimento" max="<?=$ano_atual?>">
            <label for="ano">Quer saber sua idade em que ano? (atuamente estamos em <strong>2024</strong>)</label>
            <input type="number" name="ano" id="id_ano">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section id="calcular">
        <h2>Resultado</h2>
        <?php 
            $idade = $ano - $nascimento;

            echo "<p>Quem nasceu em " . $nascimento . " vai ter <strong> " . $idade . " anos </strong> em " . $ano . "!</p>";
        ?>
    </section>
</body>
</html>