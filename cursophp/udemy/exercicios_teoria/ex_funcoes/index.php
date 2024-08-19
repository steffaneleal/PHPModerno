<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <?php 
        //função sem retorn (void)
        function exibirBoasVindas(){
            echo "Seja bem-vindo ao curso de PHP!";
        }

        exibirBoasVindas();


        //return (com retorno)
        function calcularAreaTerreno($largura, $comprimento){
            $area = $largura * $comprimento;
            return $area;

            //ou poderia ser return $largura * $comprimento
        }

        //de forma simplificada: 
        echo "<br>";
        echo calcularAreaTerreno(3, 5);
        echo "<br>";
        echo calcularAreaTerreno(20, 30);
        echo "<br>";
        echo calcularAreaTerreno(100, 50);

        /*OU:
            $resultado = calcularAreaTerreno(5, 25);
            echo $resultado;
        */
    ?>
</body>
</html>