<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias Aritmeticas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET["valor1"];
        $peso1 = $_GET["peso1"];
        $valor2 = $_GET["valor2"];
        $peso2 = $_GET["peso2"];
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?= $_SERVER["PHP_SELF"]?>" method="get">
            <label for="valor1">1º Valor</label>
            <input type="number" name="valor1" id="id_valor1" value="0" step="0.01">
            <label for="peso1">1º Peso</label>
            <input type="number" name="peso1" id="id_peso1" value="1">
            <label for="valor2">2º Valor</label>
            <input type="number" name="valor2" id="id_valor" value="0" step="0.01">
            <label for="peso2">2º Peso</label>
            <input type="number" name="peso2" id="id_peso2" value="1">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section id="calculo">
        <h1>Cálculo das Médias</h1>
        <?php 
            $media_simples = ($valor1 + $valor2) / 2;
            $media_ponderada = (($valor1 * $peso1) + ($valor2 * $peso2)) / ($peso1 + $peso2);

            echo "<p>Analisando os valores " . number_format($valor1, 2) . " e " . number_format($valor2, 2) . ":</p>";
            echo "<p><ul><li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a " . number_format($media_simples, 2) . ".</li></ul></p>";
            echo "<p><ul><li>A <strong>Média Aritmética Ponderada</strong> com pesos " . $peso1 . " e " . $peso2 . " é igual a " . number_format($media_ponderada, 2) . ".</li></ul></p>";

        ?>
    </section>

</body>
</html>