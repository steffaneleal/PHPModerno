<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops - For</title>
</head>
<body>
    <?php 
        for($num = 11; true; $num++){
            if($num >= 20){
                break;
            }

            //continue
            echo "$num <br>";
        }
    ?>
</body>
</html>