<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>False, Null e Empty</title>
</head>
<body>
    <?php 
        $funcionario1 = null;
        $funcionario2 = '';
        $funcionario3 = false;
        
        //valores null
        if(is_null($funcionario1)){ //função nativa para ver se é null ou não, aí retorna true ou false
            echo "Sim, a variável é null";
        } else{
            echo "Não, é null";
        }

        echo "<br>";

        if(is_null($funcionario2)){ //função nativa para ver se é null ou não, aí retorna true ou false
            echo "Sim, a variável é null";
        } else{
            echo "Não, a variável não é null";
        }

        echo "<br>";

        if(is_null($funcionario3)){
            echo "Sim, a variável é null";
        }else{
            echo "Não, a variável não é null";
        }

        echo "<br><br>";

        //valores vazios?
        if(empty($funcionario1)){ //empty() identifica se a variável está vazia ou não
            echo "Sim, a variável é vazia";
        }else{
            echo "Não, a variável não é vazia";
        }

        echo "<br>";

        if(empty($funcionario2)){
            echo "Sim, a variável é vazia";
        }else{
            echo "Não, a variável não é vazia";
        }

        echo "<br>";
        
        if(empty($funcionario3)){
            echo "Sim, a variável é vazia";
        }else{
            echo "Não, a variável não é vazia";
        }
    ?>
</body>
</html>