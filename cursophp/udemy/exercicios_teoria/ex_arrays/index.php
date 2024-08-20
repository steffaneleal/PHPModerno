<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h1>Array Básico</h1>
    <h2>Arrays sequenciais</h2>
    <?php 
        //sequenciais (numéricos)
        //$lista_frutas = array('banana','maçã', 'morango', 'uva');
        $lista_frutas = ['banana','maçã', 'morango', 'uva'];
        //para criar um novo valor dentro do array é só fazer: 
        $lista_frutas[] = 'Abacaxi';
        //debugando (funções para debugar, testes)
        echo "<pre>";
            var_dump($lista_frutas);
        echo "</pre>";
        echo "<hr>";
        echo "<pre>";
            print_r($lista_frutas);
        echo "</pre>";

        echo $lista_frutas[0];
        echo "<br>";
        print($lista_frutas[3]);
        echo "<hr>";
    ?>
    <h2>Arrays associativos</h2>
    <?php 
        $lista_frutas = array(
            'a' => 'banana', //aqui, definimos o índice do item 'banana' com 'a', e para isso precisamos usar uma setinha para apontar do índice para o elemento
            'b' => 'maçã',
            'x' => 'morango', 
            'u' => 'uva',
            '2' => 'jambo'); 

        print($lista_frutas['x']);
    ?>
</body>
</html>