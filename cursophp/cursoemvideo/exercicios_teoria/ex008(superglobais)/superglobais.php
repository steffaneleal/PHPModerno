<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre> <!-- o pre é bom para organizar os arrays (cada um em uma linha) -->
            <?php 
                //DECLARAÇÕES DAS SUPERGLOBAIS PARA TESTE
                //criando um cookie
                setcookie("dia-da-semana","SEGUNDA", time() + 3600); //esse time() + 3600 configura que o cookie vai durar uma hora (3600 segundos)
                
                //começando uma sessão
                session_start();
                $_SESSION["teste"] = "FUNCIONOU!";


                //para testar o GET nós usamos uma coisa chamada query string, que é um método usado para testar valores de get sem um formulário. 
                //Funciona da seguinte maneira: Você vai na barra de pesquisa do navegador, onde tem a URL e após o endereço do servidor digita ?nome_da_variavel=valor&nome_da_outra_variavel=valor
                //Ex: endereço normal: http://localhost/cursophp/exercicios_teoria/ex008(superglobais)/superglobais.php
                //Para colocar valores: http://localhost/cursophp/exercicios_teoria/ex008(superglobais)/superglobais.php?nome=Ste&idade=22
                //Nesse caso, armazenamos um nome (Ste) e uma idade (22) no array que antes estava vazio
                echo "<h1>Superglobal GET</h1>"; //por GET eu recebo só o que é GET / Contém dados enviados para o script atual através da URL (método GET)
                var_dump($_GET);

                echo "<h1>Superglobal POST</h1>"; //por POST eu recebo apenas o que é POST / Contém dados enviados para o script atual através de um formulário HTML (método POST)
                var_dump($_POST);   

                echo "<h1>Superglobal REQUEST</h1>"; //por REQUEST eu recebo o que é GET e POST em um único vetor
                var_dump($_REQUEST);

                echo "<h1>Superglobal Cookie</h1>"; //recebe Cookies (pequenas variáveis que são guardadas dentro do navegador por um determinado tempo)
                var_dump($_COOKIE);
                
                echo "<h1>Superglobal Session</h1>"; //permite que variáveis de sessão (não são perdidas durante a navegação de páginas) possam ser utilizadas
                var_dump($_SESSION);
                
                echo "<h1>Superglobal Env</h1>";
                var_dump($_ENV); //(environment) Contém variáveis de ambiente, que são passadas para o script no momento de sua execução. 
                //Acontece que no servidor do xampp não gera, mas existem sim variáveis de ambiente, então é só testar com o seguinte código
                //foreach (getenv() as $c => $v){
                //    echo "<br>$c -> $v";
                //}

                echo "<h1>Superglobal Files</h1>"; //Contém informações sobre arquivos enviados para o script através de um formulário HTML. Recebe os dados do upload de arquivos
                var_dump($_FILES);
                
                echo "<h1>Superglobal Server</h1>"; //Contém informações sobre cabeçalhos, caminhos, e locais de script. Por exemplo, $_SERVER['REQUEST_METHOD'] retorna o método de solicitação utilizado para acessar a página (GET, POST, etc.).
                var_dump($_SERVER);

                echo "<h1>Superglobal Globals</h1>"; //Um array que contém todas as variáveis globais do script. É utilizado para acessar variáveis globais de qualquer lugar do script.
                var_dump($GLOBALS);
            ?>
        </pre>
    </main>
</body>
</html>