<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>
</head>
<body>
    <h1>Variáveis e Constantes</h1>
    <?php 
        //variáveis
        $nome = "Stéffane";
        $sobrenome = "Leal";
        $idade = 22;

        //$nome = "Noemia"; funciona

        //constantes (não precisam do $ - e nem podem ter, senão dá erro)
        const PAÍS = "Brasil"; //funciona como as outras constantes, não pode ser redeclarado

        //PAÍS = "China"; dá erro de sintaxe
        
        echo "Olá, meu nome é $nome $sobrenome, eu tenho $idade anos e  moro no" . PAÍS; //não pode colocar dentro do "" do echo pq não tem $ pra diferenciar
    ?>
</body>
</html>