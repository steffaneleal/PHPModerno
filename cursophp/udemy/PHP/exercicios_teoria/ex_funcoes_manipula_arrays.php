<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Manipular Arrays</title>
</head>
<body>
    <h1>Funções nativas para manipular arrays</h1>   
    <br>
    <h2>is_array (<span style="color: red;">array</span>): Verifica se o parâmetro é um array</h2>
    <?php 
        $array = 'String';
        $array2 = array();
        $retorno = is_array($array);
        $retorno2 = is_array($array2);

        if($retorno){
            echo 'Sim, $array é um array';
        }else{
            echo 'Não, $array não é um array';
        }

        echo "<br>";

        if($retorno2){ //se retorno for true
            echo 'Sim, $array2 é um array';
        }else{
            echo 'Não, $array2 não é um array';
        }
    ?>

    <br>

    <h2>array_keys(<span style="color: red">array</span>): Retorna todas as chaves de um array</h2>
    <?php 
        $array = [1 => 'a', 7 => 'b', 18 => 'c'];
        echo '<pre>';
            print_r($array);
        echo '</pre>';

        $chaves_array = array_keys($array);
        echo '<pre>';
            print_r($chaves_array);
        echo '</pre>';
    ?>

    <br>

    <h2>sort (<span style="color: red;">array</span>): Ordena um array e reajusta seus índices </h2>
    <?php 
        $array = array('teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook');
        echo '<pre>';
            print_r($array);
        echo '</pre>';

        sort($array); //retorna true ou false para tentativa de ordenação do array
        echo '<pre>';
            print_r($array);
        echo '</pre>'
    ?>

    <br>

    <h2>asort (<span style="color: red;">array</span>): Ordena um array preservando os índices</h2>
    <?php 
        $array = array('teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook');
        echo '<pre>';
            print_r($array);
        echo '</pre>';
        
        asort($array); //retorna true ou false para tentativa de ordenação do array
        echo '<pre>';
            print_r($array);
        echo '</pre>'
    ?>

    <br>

    <h2>count (<span style="color: red;">array</span>): conta a quantidade de elementos de um array</h2>
    <?php 
        $array = array('teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook');
        echo '<pre>';
            print_r($array);
        echo '</pre>';

        echo '<pre>';
            echo count($array);
        echo '</pre>';
    ?>

    <br>

    <h2>array_merge(<span style="color: red;">array, array2, ...</span>): funde um ou mais arrays</h2>
    <?php 
        $array1 = ['osx', 'windows'];
        $array2 = array('linux');
        $array3 = ['solaris'];

        $novo_array = array_merge($array1, $array2, $array3);
        echo '<pre>';
            print_r($novo_array);
        echo '</pre>';
    ?>

    <br>

    <h2>explode(<span style="color: red;">array</span>): divide uma string baseada em um delimitador</h2>
    <?php 
        $string = '26/08/2024';
        $array_retorno = explode('/', $string);
        echo '<pre>';
        echo $string;
            print_r($array_retorno);
        echo '</pre>';
    ?>

    <br>

    <h2>implode(<span style="color: red;">array</span>): junta elementos de um array de uma string</h2>
    <?php 
        $array = ['a', 'b', 'x', 'y']; //a, b, x, y
        $string_retorno = implode(',', $array);
        echo $string_retorno;
    ?>

</body>
</html>