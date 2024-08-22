<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartão da loja</title>
    <link rel="stylesheet" href="style.css"> //css cedido pelo Guanabara no curso dele
</head>
<body>
    <main>
        <h1>Cartão da loja</h1>
        <form action="<?= $_SERVER["PHP_SELF"]?>" method="get">
            <label for="cartao">O cliente possui cartão da loja?</label>
            <input type="text" name="cartao" id="id_cartao">
            <label for="valor_compra">Qual foi o valor da compra?</label>
            <input type="number" name="valor_compra" id="id_valor_compra" step="0.01">
            <label for="frete">Valor do frete</label>
            <input type="number" name="frete" id="id_frete">
            <input type="submit" value="Comprar">
        </form>
    </main>
</body>
</html>