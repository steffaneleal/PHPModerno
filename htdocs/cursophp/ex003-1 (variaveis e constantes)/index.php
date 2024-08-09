<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testes de Variáveis e Constantes</title>
</head>
<body>
    <h1>Testes de Variáveis e Constantes</h1>
    <?php 
        $nome = "Pedro";

        //echo "É verdade que seu nome é $NOME?"; dá erro pq a variável declarada é toda em minúsculo e aqui é em maiúsculo

        //echo "É verdade que seu nome é $nOme?"; também dá erro e etc

        echo "É verdade que seu nome é $nome?";

        $salário = 2500.75;

        echo "Seu salário é de R$ $salário";
        
        //echo "Seu salário é de R$ $salario"; dá erro pq a variável declarada tem acento no a

        $valorμ = 200;

        echo "O valor é igual a $valorμ no programa"; //funciona até com letra grega

    ?>
</body>
</html>

