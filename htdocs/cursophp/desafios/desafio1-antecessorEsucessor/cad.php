<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>        
        <h1>Resultado Final</h1>
           <p>
                <?php
                    /* MANEIRA QUE EU FIZ, MAS A DELE É MELHOR
                       
                    $numero = $_GET["numero"] ?? 0;
                    echo "<br>O número escolhido foi <strong>$numero</strong>";

                    $numero_antecessor = $numero - 1;
                    echo "<br>O seu <i>antecessor</i> é $numero_antecessor";

                    $numero_sucessor = $numero + 1;
                    echo "<br>O seu <i>sucessor</i> é $numero_sucessor"; */
                    $numero = $_REQUEST["numero"] ?? 0;
                        
                    echo "<br><p>O seu número é <strong>$numero</strong></p>";
                    echo "<p>O seu <i>antecessor</i> é " . ($numero - 1) ;
                    echo "<p>O seu <i>sucessor</i> é " . ($numero + 1);
                ?>
           </p>
            <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>