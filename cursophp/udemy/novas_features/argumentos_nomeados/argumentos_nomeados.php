<?php 
    function sendEmail($destinatarios = "", $cc = "", $assunto = "", $mensagem = "") {
        echo "Destinatários: ". $destinatarios. "<br>";
        echo "CC: " . $cc . "<br>";
        echo "Assunto: " . $assunto . "<br>";
        echo "Mensagem: " . $mensagem . "<br>";
    }

    /* nova feature */
    sendEmail(
        destinatarios: "steffane.leal13@gmail.com",
        cc: "teste@teste.com.br",
        assunto: "Argumentos Nomeados",
        mensagem: "Dominando a feature de argumentos nomeados do PHP 8"
    );

    echo "<hr>";

    sendEmail(
        assunto: "Argumentos Nomeados",
        destinatarios: "steffane.leal13@gmail.com",
        mensagem: "Dominando a feature de argumentos nomeados do PHP 8"
    );

    echo "<hr>";

    /* convencional -> respeitando a ordem dos parâmetros */
    sendEmail(
        "steffane.leal13@gmail.com",
        "teste@teste.com.br",
        "Argumentos Nomeados",
        "Dominando a feature de argumentos nomeados do PHP 8"
    );

    echo "<hr>";
    sendEmail(
        "steffane.leal13@gmail.com",
        // "teste@teste.com.br
        "Argumentos Nomeados",
        "Dominando a feature de arumentos nomeados do PHP 8"
    );

?>