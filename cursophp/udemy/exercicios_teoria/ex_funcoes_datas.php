<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datas</title>
</head>
<body>
    <h1>Recuperação da data atual / data corrente</h1>
    <?php 
        //recuperação da data atual/data corrente
        echo date("d/m/Y H:i");
        echo "<br>";
        echo date_default_timezone_get(); //descobre qual timezone está sendo usada (eu mudei para America/Sao_Paulo no arquivo php.ini, mas por padrão veio Europe/Berlin)
        echo "<br>";
        date_default_timezone_set('Europe/Berlin'); //modifica o timezone (orig)
        echo date('d/m/Y H:i');

        echo "<br><br><br>";
        //cálculo de datas
    ?>

    <h1>Cálculo entre datas</h1>
    <?php 
        //para calcular precisa deixar a data no modelo norte-americano, pq a função strtotime(data) espera um formato ano/mês/dia
        $data_inicial = '2024-06-02';
        $data_final = '2024-08-20';

        //para calcular precisamos transformar em algo que possa ser calculado
        //o strtotime pega uma data (01/01/1970 - a data do início da Era Ionic) e faz um cálculo de quantos segundos há entre as duas datas
        $time_inicial = strtotime($data_inicial);
        $time_final = strtotime($data_final);

        echo $data_inicial . ' - ' . $time_inicial;
        echo "<br>";
        echo $data_final . ' - ' . $time_final;
        echo "<br>";

        $diferenca = abs($time_final - $time_inicial); //posso usar o abs pra retornar um valor absoluto de um número, e assim evitar que o número dê negativo
        
        echo "A diferença de segundos entre a data final e a inicial é igual a $diferenca s";
        echo "<br>";
        (int)$qtd_dias = $diferenca / (24 * 60 * 60); //esse cálculo do divisor é de quantos segundos existem em um dia -> 24h * 60min * 60s
        echo "A diferença de dias entre a data final e a inicial é igual a $qtd_dias dias."

    ?>
</body>
</html>