<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de Preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $preco = $_GET["preco"];
        $porcentagem = $_GET["porcentagem"];
    ?>

    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="id_preco" value="0" step="0.01">
            <label for="porcentagem">Qual será o percentual de reajuste? <strong><span id="p">?</span>%</strong></label>
            <input type="range" name="porcentagem" id="id_porcentagem" min="0" max="100" step="1" oninput="mudaValor()">
            <!-- <input type="range" name="" id="" value=""> --> <!-- acho que preciso de javascript pra fazer isso, então vou usar o normal por enquanto, até ver a resolução do Guanabara -->
            <!-- <input type="number" name="porcentagem" id="id_porcentagem" value="0"> --> 
            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section id="calcular">
        <h2>Resultado do Reajuste</h2>
        <?php 
            $preco_inicial = $preco;
            $reajuste = $preco +($preco * ($porcentagem / 100));
            echo "<p>O produto que custava R\$" . number_format($preco_inicial, 2, ",", ".") . ", com <strong>" . $porcentagem . "% de aumento </strong> vai passar a custar <strong> R\$" . number_format($reajuste, 2, ",", ".") . " </strong> a partir de agora.</p>";
        ?>
    </section>
    
    <script>
        function mudaValor(){
            p.innerText = id_porcentagem.value; //o texto dentro do elemento identificado como p vai ser 
        }
    </script>
</body>
</html>