<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $segundos = $_GET["segundos"];
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?= $_SERVER["PHP_SELF"]?>" method="get">
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="id_segundos">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="calcular">
        <h1>Totalizando tudo</h1>
        <?php 
            $semanas = $segundos / 604800; //1 semana = 604.800s
            $semanas = floor($semanas);
            $dias = $segundos / 86400;//1 dia = 86.400s
            $dias = floor($dias);
            $horas = $segundos / 3600;//1 hora = 3600s
            $horas = floor($horas);
            $minutos = $segundos / 60;//1 minuto = 60s
            $minutos = floor($minutos);

            echo "<p>Analisando o valor que você digitou, <strong>" . number_format($segundos, 0, ",", ".") . " segundos </strong> equivalem a um total de: </p>";
            echo "<p><ul><li>" . $semanas . " semanas</li></ul></p>";
            echo "<p><ul><li>" . $dias . " dias</li></ul></p>";
            echo "<p><ul><li>" . $horas . " horas</li></ul></p>";
            echo "<p><ul><li>" . $minutos . " minutos</li></ul></p>";
            echo "<p><ul><li>" . $segundos . " segundos</li></ul></p>";  
        ?>
    </section>
</body>
</html>