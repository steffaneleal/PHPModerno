<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = $_GET["dividendo"] ?? 0;
        $divisor = $_GET["divisor"];
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="id_dividendo" value="1">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="id_divisor" value="1">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section id="resposta">
        <h2>Estrutura da Divisão</h2>
        <!--Ainda não sei fazer a estrutura que o Guanabara mostrou no vídeo, então vou só printar os valores-->
        <?php 
            $resultado = $dividendo / $divisor;
            $quociente = floor($resultado);
            $resto = $dividendo % $divisor;

            echo "O <strong>divisor</strong> é $divisor";
            echo "<br>O <strong>dividendo</strong> é $dividendo";
            echo "<br>O <strong>quociente</strong> é $quociente";
            echo "<br>O <strong>resto</strong> é $resto";
        ?>
    </section>
</body>
</html>