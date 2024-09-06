<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops - While</title>
</head>
<body>
    <?php 
        // $num = 0;
        // echo "-- Início do Loop -- <br>";
        // while($num < 50){
        //     echo "$num <br>";
        //     $num += 5;
        // }
        // echo "-- Fim do Loop --";
    ?>

    <h2>Uso do Break</h2>
    <?php 
        $num = 0;
        echo "-- Início do Loop -- <br>";

        while(true){
            echo "$num <br>";

            $num += 5;

            if($num > 100){
                break;
            }
        }
        echo "-- Fim do Loop -- <br>";
    ?>

    <h2>Uso do Continue</h2>
    <?php 
        $num = 0;

        echo "-- Início do Loop -- <br>";
        while ($num < 10){
            $num++;

            if($num == 2 || $num == 6){
                continue;
            }

            echo $num . "<br>";

        }
        echo "-- Fim do Loop --";
    ?>
</body>
</html>