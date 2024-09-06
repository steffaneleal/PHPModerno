<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops - Foreach</title>
</head>
<body>
    <?php 
        $itens = ['sofá', 'mesa', 'cadeira', 'fogão', 'geladeira'];

        echo "<pre>";
        print_r($itens);
        echo "</pre>";
    
        foreach($itens as $item){
            echo "$item <br>";
        }
    ?>
</body>
</html>