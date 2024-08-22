<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $numero1 = isset($_GET["numero1"]) ? $_GET["numero1"] : null;
        $numero2 = isset($_GET["numero2"]) ? $_GET["numero2"] : null;
        $operacao = isset($_GET["operacao"]) ? $_GET["operacao"] : null;
    ?>

    <main>
        <h1>Calculadora</h1>

        <form action="<?= $_SERVER["PHP_SELF"]?>" method="get">
            <label for="numero1">Digite o primeiro número: </label>
            <input type="number" name="numero1" id="numero1" placeholder="Primeiro número">
            <label for="numero2">Digite o segundo número: </label>
            <input type="number" name="numero2" id="numero2" placeholder="Segundo número">
            <select name="operacao" id="operacao">
                <option value="escolha">Escolha uma opção</option>
                <option value="adicao">Adição</option>
                <option value="subtracao">Subtração</option>
                <option value="multiplicacao">Multiplicação</option>
                <option value="divisao">Divisão</option>
                <option value="potenciacao">Potenciação</option>
                <option value="radiciacao">Radiciação</option>
            </select>
            <input type="submit" value="Calcular">
        </form>
        <h6 style="font-weight: 200;">*Esse estilo foi pego do curso de PHP Moderno do Curso em Vídeo</h6>
    </main>

    <section id="calcular">
        <h2>Resultado</h2>

            <?php 
                switch($operacao){
                    case 'adicao':
                        $resultado = $numero1 + $numero2;
                    break;
                    case 'subtracao':
                        $resultado = $numero1 - $numero2;
                    break;
                    case 'multiplicacao':
                        $resultado = $numero1 * $numero2;
                    break;
                    case 'divisao': 
                        $resultado = $numero1 / $numero2;
                    break;
                    case 'potenciacao':
                        $resultado = $numero1 ** $numero2;
                    break;
                    case 'radiciacao':
                        $resultado = $numero1 * (1/$numero2);
                    break;
                }
            
                echo "O resultado é $resultado";
            ?>

    </section>
</body>
</html>