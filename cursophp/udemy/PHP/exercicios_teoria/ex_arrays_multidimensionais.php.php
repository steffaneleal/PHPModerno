<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Multidimensional</title>
</head>
<body>
    <h1>Array Multidimensional</h1>
    <?php 
        $lista_coisas = [];
        $lista_coisas['frutas'] = ['1' => 'banana', '2' => 'maçã', '3' => 'morango', '4' => 'uva'];
        $lista_coisas['pessoas'] = ['João', 'José', 'Maria'];

        echo "<pre>";
        print_r($lista_coisas);
        echo $lista_coisas['frutas'][2];
        echo "</pre>";
    ?>
</body>
</html>