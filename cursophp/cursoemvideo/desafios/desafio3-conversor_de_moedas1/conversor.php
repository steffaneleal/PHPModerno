<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <p>
            <?php 
                $real = $_REQUEST["dinheiro"] ?? 0;
                $cotação = 5.49;
                $dolar = $real / $cotação; //tentei arredondar com ceil, floor ou round mas arredonda pra valor inteiro, não apenas as casas decimais :(

                // FORMA SIMPLES: echo "Seus R$" . number_format($real, 2, ",", ".") . " equivalem a <strong>US$" . number_format($dolar, 2, ",", ".") . "</strong>"; 
                //OBS: esse negócio de number_format(nome_da_variavel, numero_de_casas_decimais) serve para deixar no formato de número, tipo o que é 1214.00 vira 1.214,00, e as partes com vírgula está deixando do jeito em que estamos acostumados, com o ponto separando o milhar das centenas, pq o padrão da função é dos EUA
                //Isso resolveu o meu problema de tirar aquele monte de casas decimais

                //FORMATAÇÃO DE MOEDAS COM INTERNACIONALIZAÇÃO
                //Biblioteca INTL (internallization PHP)
                $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY); //numberformatter, ou seja, criar formatação de número
                echo "Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrão, $dolar, "USD") . "*";
            ?>
        </p>

        <h2><strong>*Cotação fixa de R$5,49</strong> informada diretamente no código.</h2>

        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>