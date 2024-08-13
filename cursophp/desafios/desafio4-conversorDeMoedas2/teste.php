<pre>
<?php
    $inicio = date("m-d-Y", strtotime("-7 days")); //string to time -> o dia de hoje - 7 dias
    $fim = date("m-d-Y"); //aqui a gente está tentando fazer com que a data do dado da API seja o dia em que está rodando o programa, então por isso a função. E o date está configurado assim ao invés de ("d/m/Y") pq é como está escrito na URL
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao'; //usa aspas simples porque tem $ dentro, e aspas duplas interpreta as $, o que seria errado já que não são variáveis
    //quando cola dá erro pq tem algumas aspas simples dentro do single quote, então é só tratar com \'(caracter de escape)

    $dados = json_decode(file_get_contents($url), true); //pegar os arquivos da url (que está no formato json)
    //diferença entre colocar true e false: true coloca dentro de um array e false coloca dentro de um objeto

    $cotação = $dados["value"][0]["cotacaoCompra"];

    echo "A cotação foi $cotação";

?>
</pre>
