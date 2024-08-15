<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas v2.0</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v2.0</h1>
        <p>
            <?php
                $real = $_REQUEST["real"] ?? 0;

                //PARTE DA API
                $inicio = date("m-d-Y", strtotime("-7 days")); //string to time -> o dia de hoje - 7 dias
                $fim = date("m-d-Y"); //aqui a gente está tentando fazer com que a data do dado da API seja o dia em que está rodando o programa, então por isso a função. E o date está configurado assim ao invés de ("d/m/Y") pq é como está escrito na URL
                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao'; //usa aspas simples porque tem $ dentro, e aspas duplas interpreta as $, o que seria errado já que não são variáveis
                //quando cola dá erro pq tem algumas aspas simples dentro do single quote, então é só tratar com \'(caracter de escape)
            
                $dados = json_decode(file_get_contents($url), true); //pegar os arquivos da url (que está no formato json)
                //diferença entre colocar true e false: true coloca dentro de um array e false coloca dentro de um objeto
            
                $cotação = $dados["value"][0]["cotacaoCompra"];
                $dolar = $real / $cotação; //tentei arredondar com ceil, floor ou round mas arredonda pra valor inteiro, não apenas as casas decimais :(

                // FORMA SIMPLES: echo "Seus R$" . number_format($real, 2, ",", ".") . " equivalem a <strong>US$" . number_format($dolar, 2, ",", ".") . "</strong>"; 
                //OBS: esse negócio de number_format(nome_da_variavel, numero_de_casas_decimais) serve para deixar no formato de número, tipo o que é 1214.00 vira 1.214,00, e as partes com vírgula está deixando do jeito em que estamos acostumados, com o ponto separando o milhar das centenas, pq o padrão da função é dos EUA
                //Isso resolveu o meu problema de tirar aquele monte de casas decimais

                //FORMATAÇÃO DE MOEDAS COM INTERNACIONALIZAÇÃO
                //Biblioteca INTL (internallization PHP)
                $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY); //numberformatter, ou seja, criar formatação de número
                echo "Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrão, $dolar, "USD") . "*"; 

                /*Modo mais simples de formatar o negócio do dinheiro
                echo "Seus R$" . number_format($real, 2, ",", ".") . " equivalem a <strong>US$" . number_format($dolar, 2, ",", ".") . "</strong>"; 
                //OBS: esse negócio de number_format(nome_da_variavel, numero_de_casas_decimais) serve para deixar no formato de número, tipo o que é 1214.00 vira 1.214,00, e as partes com vírgula está deixando do jeito em que estamos acostumados, com o ponto separando o milhar das centenas, pq o padrão da função é dos EUA
                //Isso resolveu o meu problema de tirar aquele monte de casas decimais
                */
            ?>
        </p>
        <h2>*Cotação obtida diretamente do site do <strong><a href="https://www.bcb.gov.br/">Banco Central do Brasil</a></strong></h2>

        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>