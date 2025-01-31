<?php 

    $busca = 21;

    switch($busca) { //comparação por igualdade/equalidade (==)
        case '1':
            $retornoSwitch = "Encontrou o texto 1";
            break;
        case 2:
            $retornoSwitch = "Encontrou o número 2";
            break;
        default:
            $retornoSwitch = "NÃO encontrou";
    }

    echo "Resultado switch: " . $retornoSwitch;
    echo "<hr>";

    // $retornoMatch = match($busca) { // comparação por identidade/estrita (===)
    //     '1' => "Encontrou o texto 1",
    //     1 => "Encontrou o número 1",
    //     5, '8', 1, 'X' => "Encontrou o valor 5 ou 12, ou os textos 8 ou X",
    //     default => "NÃO encontrou"
    // }; //precisa desse ponto e vírgula

    // match com condicionais e operações lógicas
    $retornoMatch = match(true) {
        $busca < 20 => "Encontrou",
        $busca >= 20 && $busca <= 30 => "Encontrou um valor maior que 20 e menor que 30",
        default => "NÃO encontrou"
    };

    echo "Resultado match: " . $retornoMatch;
?>