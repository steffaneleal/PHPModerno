<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções - Strings</title>
</head>
<body>
    <?php 
        $texto = "Curso Completo de PHP";

        echo $texto;
        //string to lower
        echo "<br>";
        echo strtolower("String to lower: " . $texto); //poderia ter colocado strtolower("Curso Completo de PHP");
        echo "<br>";
        echo "<hr>";

        //string to upper
        echo $texto;
        echo "<br>";
        echo strtoupper("String to upper: " . $texto);
        echo "<hr>";

        //upper case first
        echo $texto;
        echo "<br>";
        echo ucfirst("Upper Case First: " . $texto);
        echo "<hr>";

        //string length
        echo $texto;
        echo "<br>";
        echo strlen("String length: " . $texto);
        echo "<hr>";

        //string replace
        echo $texto;
        echo "<br>";
        echo "String replace : ";
        echo str_replace("PHP", "JavaScript", $texto);
        echo "<hr>";

        //substr
        echo $texto;
        echo "<br>";
        echo substr($texto, 0, 5) . "...";
        echo " (da posição 0 ao 5 tem a palavra Curso)";
    ?>
</body>
</html>