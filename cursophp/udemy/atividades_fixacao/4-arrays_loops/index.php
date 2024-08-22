<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mega Sena</title>
</head>
<body>
    <!-- Crie um script capaz de produzir, através de um laço de repetição, um array com 6 elementos numéricos aleatórios entre 1 e 60, simulando o funcionamento do sorteio da mega sena. Atente-se ao fato de que os números aleatórios contidos dentro do array não podem ser repetidos -->
     <?php 
        $numeros = array();

        while(count($numeros) <= 5){
            if(!in_array($num, $numeros)){
                $numeros[] = $num;
            }
        }
        print_r($numeros);
     ?>
</body>
</html>