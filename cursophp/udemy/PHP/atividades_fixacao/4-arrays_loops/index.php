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
        $numeros = array(); //criando um array vazio

        while(count($numeros) <= 5){ //vai popular o array enquanto ele não chegar a 6 elementos
            $num = mt_rand(1, 60); //gera um número de 1 a 60 para a variável $num
                if(!in_array($num, $numeros)){ //vê se o número gerado pelo rand já existe dentro do array
                    $numeros[] = $num; //se o número gerado ainda não estiver no array $numeros ele é adicionado ao final do array
                }
        }
        echo "<pre>";
        print_r($numeros);
        echo "</pre>";
     ?>
</body>
</html>