<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    <h3>Pós-incremento</h3>
    <?php 
        $var = 7;

        echo "O valor contido em var é $var<br>";
        echo "O valor contido em var após o incremento é " . $var++ . "<br>";
        echo "O valor atualizado é $var";
    ?>

    <h3>Pré-incremento</h3>
    <?php 
        $var = 7;

        echo "O valor contido em var é $var <br>";
        echo "O valor contido em var após o incremento é " . ++$var . "<br>";
        echo "O valor atualizado é $var";
    ?>

    <h3>Pós-decremento</h3>
    <?php 
        $var = 7;

        echo "O valor contido em var é $var <br>";
        echo "O valor contido em var após o decremento é " .$var-- . "<br>";
        echo "O valor atualizado é $var";
    ?>

    <h3>Pré-decremento</h3>
    <?php 
        $var = 7;

        echo "O valor contido em var é $var <br>";
        echo "O valor contido em var após o decremento é " . --$var . "<br>";
        echo "O valor atualizado é $var";
    ?>
</body>
</html>