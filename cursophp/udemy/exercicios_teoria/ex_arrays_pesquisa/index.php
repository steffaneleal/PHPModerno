<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa em Arrays</title>
</head>
<body>
    <h1>Pesquisa em Arrays</h1>
    <?php 
        $lista_frutas = ['banana', 'maçã', 'morango', 'uva'];
        print_r($lista_frutas);
        echo "<br>";
    ?>

    <h2>in_array()</h2>
    <?php 
        $existe = in_array('morango', $lista_frutas);
        //true -> texto = 1
        //false -> texto = vazio
        if($existe) {
            echo 'Sim, o valor pesquisado existe no array';
        }else{
            echo 'Não, o valor pesquisado não existe no array';
        }
    ?>

    <h2>array_search()</h2>
    <?php 
        echo array_search('uva', $lista_frutas);
        echo "<br>";
        $existe = array_search('uva', $lista_frutas);
        //true -> texto = 1
        //false -> texto = vazio
        //null -> texto = vazio

        if($existe != null){
            echo "Sim, o valor pesquisado existe no array";
        }else{
            echo "Não, o valor pesquisado não existe no array";
        }
    ?>

    <h2>Teste de false e null no array_search()</h2>
    <?php 
        $array = ['a' => 1, 'b' => 2, 'c' => null];

        //Caso 1: valor encontrado
        $resultado = array_search(2, $array); //retorna 'b'
        var_dump($resultado); //string(1) "b"
        
        echo "<br>";

        //Caso 2: valor não encontrado 
        $resultado = array_search(4, $array); //retorna false (pois não existe um 4º elemento no array
        var_dump($resultado); // bool(false)
        
        echo "<br>";

        //Caso 3: valor null no array
        $resultado = array_search(null, $array); //retorna 'c'
            var_dump($resultado); //string(1) "c"
    ?>
</body>
</html>