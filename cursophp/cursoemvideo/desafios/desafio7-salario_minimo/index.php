<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Salários Mínimos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salario = $_GET["salario"];
    ?>
    <main>
        <h1>Informe o seu salário</h1>
        <form action="<?= $_SERVER["PHP_SELF"]?>" method="get">
            <label for="salario">Salário</label>
            <input type="number" name="salario" id="id_salario" value="0" step="0.01">
            
            <h2>Considerando o salário mínimo de <strong>R$1.380,00</strong></h2>

            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="calculo">
        <h1>Resultado Final</h1>
        <?php 
            $salario_min = $salario / 1380;
            $salario_min_qtd = floor($salario_min);
            $salario_min_resto = $salario - ($salario_min_qtd * 1380);
            
            if($salario_min_qtd <= 1 && $salario_min_resto == 0){
                echo "Quem recebe um salário de R\$" . number_format($salario, 2, ",", ".") . " ganha <strong>" . $salario_min_qtd . " salário mínimo</strong>.";
            }else if($salario_min_qtd <= 1 && $salario_min_resto != 0){
                echo "Quem recebe um salário de R\$" . number_format($salario, 2, ",", ".") . " ganha <strong>" . $salario_min_qtd . " salário mínimo</strong> + R\$" . number_format($salario_min_resto, 2, ",", ".") . ".";
            }else if($salario_min_qtd >= 2 && $salario_min_resto == 0){
                echo "Quem recebe um salário de R\$" . number_format($salario, 2, ",", ".") . " ganha <strong>" . $salario_min_qtd . " salários mínimos</strong>.";
            }else if($salario_min_qtd >= 2 && $salario_min_resto != 0){
                echo "Quem recebe um salário de R\$" . number_format($salario, 2, ",", ".") . " ganha <strong>" . $salario_min_qtd . " salários mínimos</strong> + R\$" . number_format($salario_min_resto, 2, ",", ".") . ".";
            }
        ?>
    </section>
</body>
</html>