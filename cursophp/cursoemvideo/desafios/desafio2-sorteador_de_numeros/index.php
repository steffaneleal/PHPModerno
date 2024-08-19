<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <?php 

            /*Existem 3 funções para resolver: 
            - rand() -> de 1951, chama Linear Congrential Generator
            - mt_rand() -> 1997 (4 vezes mais rápido que o rand()) - Mersenne Twister //nesse o segundo argumento deve ser maior que o primeiro obrigatoriamente
            *Segundo o manual, a partir do PHP 7.1, rand() é um simples apontamento para mt_rand()
            - random_int() gera números aleatórios criptograficamente seguros, bom para senhas e coisas do tipo (MAS É O MAIS LENTO)
            */
            echo "Gerando um número aleatório entre 0 e 100...";
            $min = 0;
            $max = 100;
            $numero_aleatorio = mt_rand($min, $max);

            echo "<br><br>O valor gerado foi <strong>$numero_aleatorio</strong>";
        ?>
        <br><br>
        <button onclick="javascript:history.go(0)">&#x1F504; Gerar outro</button> //dá para fazer o onclick="javascript:document.location.reload()"
    </main>
</body>
</html>