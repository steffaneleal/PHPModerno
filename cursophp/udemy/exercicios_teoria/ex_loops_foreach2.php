<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops - Foreach</title>
</head>
<body>
    <?php 
        $funcionarios = array(
            array('nome' => 'João', 'salario' => 2500),
            array('nome' => 'Maria', 'salario' => 3000),
            array('nome' => 'Julia', 'salario' => 2200),
        );

        echo "<pre>";
        print_r($funcionarios);
        echo "</pre>";

        foreach($funcionarios as $idx => $funcionario){
            echo "<pre>";
            print_r($funcionario);
            echo "</pre>";
        }
    ?>

    <br><br>

    <h2>Encadeando foreachs</h2>
    <?php 
        $funcionarios = array(
            array('nome' => 'João', 'salario' => 2500, 'data_nascimento' => '02/06/2002'),
            array('nome' => 'Maria', 'salario' => 3000),
            array('nome' => 'Julia', 'salario' => 2200)
        );

        echo "<pre>";
        print_r($funcionarios);
        echo "</pre>";

        foreach($funcionarios as $idx => $funcionario){
            //encadear foreachs
            foreach($funcionario as $idx2 => $valor){
                echo "$idx2 - $valor <br>";
            }
            echo "<hr>";
        }
    ?>
</body>
</html>