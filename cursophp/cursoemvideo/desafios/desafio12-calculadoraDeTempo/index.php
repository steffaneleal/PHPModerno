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
        $total = $_GET["total"];
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?= $_SERVER["PHP_SELF"]?>" method="get">
            <label for="total">Qual é o total de segundos?</label>
            <input type="number" name="total" id="id_total" min="0">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="calcular">
        <h1>Totalizando tudo</h1>
        <?php 
            $sobra = $total;
            //Total de Semanas
            $semanas = (int)($sobra / 604800);//1 semana = 604.800s. e coloquei (int) na frente pq não quero o número real
            $sobra = $sobra % 604800;
            //Total de Dias
            $dias = (int)$sobra / 86400; //1 dia = 86.400s
            $sobra = $sobra % 86400;
            //Total de Horas
            $horas = (int)$sobra / 3600;//1 hora = 3600s
            $sobra = $sobra % 3600;
            //Total de Minutos
            $minutos = (int)$sobra / 60;
            $sobra = $sobra % 60;
            //Total de segundos
            $segundos = $sobra;//1 minuto = 60s



            echo "<p>Analisando o valor que você digitou, <strong>" . number_format($total, 0, ",", ".") . " segundos </strong> equivalem a um total de: </p>";
            echo "<p><ul><li>" . floor($semanas) . " semanas</li></ul></p>";
            echo "<p><ul><li>" . floor($dias) . " dias</li></ul></p>";
            echo "<p><ul><li>" . floor($horas) . " horas</li></ul></p>";
            echo "<p><ul><li>" . floor($minutos) . " minutos</li></ul></p>";
            echo "<p><ul><li>" . floor($segundos) . " segundos</li></ul></p>";  
        ?>
    </section>
</body>
</html>