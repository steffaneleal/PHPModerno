<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raízes de um número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $numero = $_GET["numero"];
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER["PHP_SELF"]?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="id_numero" value="0" step="0.01">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section id="calculo">
        <h1>Resultado Final</h1>
        <?php 
            $raiz_quadrada = $numero ** (1/2);
            $raiz_cubica = $numero ** (1/3);

            echo "<p>Analisando o <strong> número " . $numero . "</strong>, temos: </p>";
            echo "<p><ul><li>A sua raiz quadrada é " . number_format($raiz_quadrada, 3) . "</li></ul></p>";
            echo "<p><ul><li>A sua raiz cúbica é " . number_format($raiz_cubica, 3) . "</li></ul></p>";
        ?>
    </section>
</body>
</html>