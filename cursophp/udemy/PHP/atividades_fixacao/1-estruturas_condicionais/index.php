<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doação de Sangue</title>
    <link rel="stylesheet" href="style.css"> <!-- css do Guanabara -->
</head>
<body>
    <?php 
        $idade = $_GET["idade"];
        $peso = $_GET["peso"];
    ?>
    <main>
        <h1>Doação de Sangue</h1>
        <form action="<?= $_SERVER["PHP_SELF"]?>" method="get">
            <h2>Você pode doar sangue?</h2>    
            <label for="idade">Quantos anos você tem?</label>
            <input type="number" name="idade" id="id_idade" min="0" value="<?=$idade?>">
            <label for="peso">Peso:</label>
            <input type="number" name="peso" id="id_peso" min="0" step="0.01" value="<?=$peso?>">
            <input type="submit" value="Descobrir">
        </form>
        <h6 style="font-size: 8px;">*CSS do Guanabara (Curso em Vídeo)</h6>
    </main>
    <section id="calcular">
        <p>
            <?php 
                if($idade >= 16 && $idade <= 69 && $peso > 50){
                    print("Atende aos requisitos");
                }else{
                    print("Não atende aos requisitos");
                }
            ?>
        </p>
    </section>

</body>
</html>