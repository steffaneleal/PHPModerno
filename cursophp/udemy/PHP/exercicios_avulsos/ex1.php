<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios</title>
</head>
<body>
    <h1>Exercício 1</h1>
    <p>1. Entre com os dados de 10 alunos de uma classe, recebendo as
    informações como nome e
    uma nota do aluno. Armazene estes dados em um vetor.
    Ao final do programa mostrar a média de nota da classe, e o nome
    do aluno que obteve maior nota.
    </p>

    <br>

    <?php 
        $nome = $_GET["nome"];
        $nota = $_GET["nota"];
    ?>
    
    <form action="<?= $_SERVER["PHP_SELF"]?>" method="get">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" placeholder="nome">
        <label for="nota">Nota: </label>
        <input type="number" name="nota" id="nota" placeholder="nota" min="0">
        <input type="submit" value="Enviar">
    </form>

    <?php 
        $aluno[$i] = ['aluno_nome' => 'nome', 'aluno_nota' => 'nota'];
        print_r($aluno);

        while($i <= 9){
            
        }
    ?>
</body>
</html>