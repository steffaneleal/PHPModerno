<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'Pessoa.php';;
            require_once 'Livro.php';
            
            $p[0] = new Pessoa("Steffane", 22, "F");
            $p[1] = new Pessoa("Rythi", 22, "M");
            
            $l[0] = new Livro("Php Básico", "José da Silva", 300, $p[0]);
            $l[1] = new Livro("POO com PHP", "Maira de Souza", 500, $p[0]);
            $l[2] = new Livro("PHP Avançado", "Ana Paula", 800, $p[1]);
            
            $l[0]->abrir();
            $l[0]->folhear(100);
            echo $l[0]->detalhes();
            
            $l[1]->abrir();
            $l[1]->folhear(400);
            $l[1]->avancarPag();
            echo $l[1]->detalhes();
            
            echo $l[2]->detalhes();
        ?>
    </body>
</html>
