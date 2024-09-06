<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Prática - Loops</title>
</head>
<body>
    <?php 
        $registros = array('Título notícia 1', 'Título notícia 2', 'Título notícia 3');
        print_r($registros);
        echo "<br><br>";

        $idx = 0; //índice
        while($idx < 3){ //pq há 3 posições no array
            echo $registros[$idx]; 
            echo "<hr>";
            $idx++;

        }
    ?>
    
    <br>

    <h2>Exemplo com array multidimensionais</h2>
    <p>A primeira dimensão é numérica e a segunda é associativa, já que cada título se associa a um conteúdo.</p>

    <?php 
        $registros = array(
            array('titulo' => 'Título notícia 1', 'conteudo' => 'Conteúdo notícia 1'),
            array('titulo' => 'Título notícia 2', 'conteudo' => 'Conteúdo notícia 2'),
            array('titulo' => 'Título notícia 3', 'conteudo' => 'Conteúdo notícia 3'),
        );

        echo "<pre>";
        print_r($registros); //nesse caso é necessário usar print_r pq não se trata
        echo "</pre>";

        echo "<br><br><br>";

        echo "Número de registros: " . count($registros) . " registros.";

        $idx = 0;
        while($idx < count($registros)){
            //a cada iteração do laço vamos recuperar cada um dos arrays e na sequência vamos acessar o valor contido dentro desses arrays de retorno a partir dos índices associativos
            echo '<h3>' . $registros[$idx]['titulo'] . '</h3>'; 
            echo '<p>' . $registros[$idx]['conteudo'] . '</p>'; 
            echo "<hr>";

            $idx++;
        }
    ?>

    <br><br>

    <h2>Com DO WHILE</h2>
    <?php 
        $registros = array(
            array('titulo' => 'Título notícia 1', 'conteudo' => 'Conteúdo da notícia 1'),
            array('titulo' => 'Título notícia 2', 'conteudo' => 'Conteúdo da notícia 2'),
            array('titulo' => 'Título notícia 3', 'conteudo' => 'Conteúdo da notícia 3'),
            array('titulo' => 'Título notícia 4', 'conteudo' => 'Conteúdo da notícia 4'),
        );
        
        echo "<pre>";
        print_r($registros);
        echo "</pre>";

        echo "<br><br><br>";

        $idx = 0;

        echo "Número de registros: " . count($registros) . ' registros.';

        echo "<br>";

        do{
            echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
            echo '<p>' . $registros[$idx]['conteudo'] . '</p>';

            echo '<hr>';

            $idx++;
        }while($idx < count($registros));
    ?>

    <br><br>

    <h2>Com FOR</h2>
    <?php 
        $registros = array(
            array('titulo' => 'Título notícia 1', 'conteudo' => 'Conteúdo notícia 1'),
            array('titulo' => 'Título notícia 2', 'conteudo' => 'Conteúdo notícia 2'),
            array('titulo' => 'Título notícia 3', 'conteudo' => 'Conteúdo notícia 3'),
            array('titulo' => 'Título notícia 4', 'conteudo' => 'Conteúdo notícia 4'),
            array('titulo' => 'Título notícia 5', 'conteudo' => 'Conteúdo notícia 5')
        );

        echo "<pre>";
        print_r($registros);
        echo "</pre>";

        echo "<br><br>";

        echo "Número de registros: " . count($registros) . " registros.";

        $idx = 0;
        for($idx = 0; $idx < count($registros); $idx++){
            echo "<h3>" . $registros[$idx]['titulo'] . "</h3>";
            echo "<p>" . $registros[$idx]['conteudo'] . "</p>";

            echo "<br>";
        }
    
    ?>
</body>
</html>