<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota{
            height: 50px;
        }
    </style>
</head>
<body>
    <?php 
        $valor = $_GET["valor"] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?= $_SERVER["PHP_SELF"]?>" method="get">
            <label for="valor">Qual valor você deseja sacar? (R$) <sup>*</sup></label>
            <input type="number" name="valor" id="id_valor" step="5" min="0" require value="<?= $valor?>"> <!-- o step="5" define que apenas múltiplos de 5 podem ser digitados (de 5 em 5) -->
            <p style="font-size: 0.6em;">*Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section id="calcular">
        <?php 
            $resto = $valor;
            //NOTAS DE CEM
            $cem = (int)($resto / 100);
            $resto = $resto % 100;//tanto faz se for (floor) ou (int)
            //NOTAS DE CINQUENTA
            $cinquenta = floor($resto / 50);
            $resto = $resto % 50;
            //NOTAS DE DEZ
            $dez = (int)($resto / 10);
            $resto = $resto % 10;
            //NOTAS DE CINCO
            $cinco = floor($resto / 5);
            $resto = $resto % 5;
        ?>
        <h1>Saque de R$<?= $valor?> realizado</h1>
        <p>O caixa eletrônico vai te te entregar as seguintes notas: </p>
        <ul>
            <li><img class="nota" src="assets/100-reais.jpg" alt=""> x<?= $cem?></li>
            <li><img class="nota" src="assets/50-reais.jpg" alt=""> x<?=$cinquenta?></li>
            <li><img class="nota" src="assets/10-reais.jpg" alt=""> x<?=$dez?></li>
            <li><img class="nota" src="assets/5-reais.jpg" alt=""> x<?=$cinco?></li>
        </ul>
    </section>
</body>
</html>