<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de imposto de renda</title>
</head>
<body>
    <!-- Crie uma função para calcular o imposto de renda a ser pago com base em um salário passado por parâmetro -->
    <?php 
        $salario = $_GET["salario"];
    ?>

    <main>
        <h2>Cálculo de Imposto de Renda</h2>
        <form action="<?= $_SERVER["PHP_SELF"]?>" method="get">
            <label for="salario">Por favor, insira o seu salário: </label>
            <input type="number" name="salario" id="salario" step="0.01" value="0"min="0">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section class="calcular">
        <?php 
            function calcularImpostoRenda($salario){    
                if($salario <= 1903.98){
                    $aliquota = "isento";
                }else if($salario >= 1903.99 && $salario <= 2826.65){
                    $aliquota = "7,5%";
                }else if($salario >= 2826.66 && $salario <= 3751.05){
                    $aliquota = "15%";
                }else if($salario >= 3751.06 && $salario <= 4664.68){
                    $aliquota = "22,5%";
                }else{
                    $aliquota = "27,5%";
                }
            
            return $aliquota;
            }

            echo calcularImpostoRenda($salario);
        ?>
    </section>
</body>
</html>