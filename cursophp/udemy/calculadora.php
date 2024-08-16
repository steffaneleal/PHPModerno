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
        //Números 
        $numero1 = $_GET["numero1"];
        $numero2 = $_GET["numero2"];
        //Opções
        $opcoes = $_GET["opcoes"];
        $escolha = $_GET["escolha"];
        $adicao = $_GET["adicao"];
        $subtracao = $_GET["subtracao"];
        $multiplicacao = $_GET["multiplicacao"];
        $divisao = $_GET["divisao"];
        $potenciacao = $_GET["potenciacao"];
        $raiz = $_GET["raiz"];
    ?>
    <main>
        <h1>Calculadora</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="numero1">Número 1: </label>
            <input type="number" name="numero1" id="id_numero1" value="0">
            <label for="numero2">Número 2: </label>
            <input type="number" name="numero2" id="id_numero2" value="0">
            <select name="opcoes" id="id_opcoes"> <!-- select cria a caixa de seleção -->
                <option value="escolha">Escolha uma operação</option>
                <option value="adicao">Adição</option>
                <option value="subtracao">Subtração</option>
                <option value="multiplicacao">Multiplicação</option>
                <option value="divisao">Divisão</option>
                <option value="potenciacao">Potenciação</option>
                <option value="raiz">Raiz</option>
            </select>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="calcular">
        <h2>Resultado</h2>
        <p>
            <?php 
                switch($opcoes){
                    case 'adicao':
                        $resultado = $numero1 + $numero2;
                        //echo "O resultado é: $resultado";
                        break;

                    case 'subtracao':
                        $resultado = $numero1 - $numero2;
                        //echo "O resultado é: $resultado";
                        break;

                    case 'multiplicacao':
                        $resultado = $numero1 * $numero2;
                        //echo "O resultado é: $resultado";
                        break;

                    case 'divisao':
                        $resultado = $numero1 / $numero2;
                        //echo "O resultado é: $resultado";
                        break;
                    
                    case 'potenciacao':
                        $resultado = $numero1 ** $numero2;
                        break;

                    case 'raiz':
                        $resultado = $numero1 ** (1/$numero2);

                    case 'escolha':
                        echo 'Escolha uma operação';
                        break;
                }

                echo "O resultado é: $resultado";
            ?>
        </p>
    </section>
</body>
</html>