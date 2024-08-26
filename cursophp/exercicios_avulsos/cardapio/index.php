<!-- Declara as coisas antes do site -->
<?php 
    $lanches = ["MLKing", "ML-Egg", "ML-Bacon"];
    $lanchesURL = ['assets/mlking.png', 'assets/mlegg.png', 'assets/mlbacon.png'];

    $acompanhamentos = ["ML-Fritas", "ML-Nuggets", "ML-Salad"];
    $acompanhamentosURL = ['assets/mlfritas.webp', 'assets/mlnuggets.png', 'assets/mlsalad.png'];

    $refrigerantes = ["Coca-Cola", "Fanta", "Guaraná"];
    $refrigerantesURL = ['assets/coca.png', 'assets/fanta.png', 'assets/guarana.png'];

    //referências das imagens ao final do código
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Lanchão - Cardápio</title>

    <!-- LINKS CSS -->
     <link rel="stylesheet" href="css/header.css">
     <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <header>
        <div id="header">

            <div class="header-logo">
                <img class="header-logo-img" src="assets/meu_lanchao_logo.png" alt="Logo Meu Lanchão">
                <h2>Meu Lanchão</h2>
            </div>

            <div class="header-nav">
                <nav><a href="#lanches">Lanches</a></nav>
                <nav><a href="#acompanhamentos">Acompanhamentos</a></nav>
                <nav><a href="#refrigerantes">Refrigerantes</a></nav>
            </div>

        </div>
    </header>

    <main>
        <section id="home">
            <h1>Cardápio do Meu Lanchão</h1>
            <img src="assets/meu_lanchao_logo.png" alt="">
        </section>

        <div class="lanches" style="padding: 20px;">
            <h2>Lanches</h2>
            <section class="lanches-row">
                <?php 

                    for($i = 0 ; $i < 3 ; $i++){
                        echo '<div class="col-md-4">';
                            echo '<div class="card ">';
                                echo '<img src="'. $lanchesURL[$i] .'" height="200" class="card-img-top" >';
                                echo '<div class="card-body">';
                                    echo '<h5 class="card-title">' . $lanches[$i] . '</h5>';
                                    echo '<a href="#" class="btn btn-primary">Comprar</a>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    }
                ?>
            </section>

            <h2>Acompanhamentos</h2>
            <section class="lanches-row">
                <?php 
                    for ($i = 0 ; $i < 3 ; $i++ ) {
                        echo '<div class="col-md-4">';
                            echo '<div class="card " style="width: 18rem;">';
                                echo '<img src="'. $acompanhamentosURL[$i] .'" width="200" class="card-img-top" >';
                                echo '<div class="card-body">';
                                    echo '<h5 class="card-title">' . $acompanhamentos[$i] . '</h5>';
                                    echo '<a href="#" class="btn btn-primary">Comprar</a>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
				    } 
                ?>
            </section>

            <h2>Refrigerantes</h2>
            <section class="lanches-row">
                <?php
                    for ($i = 0 ; $i < 3 ; $i++ ) {
                        echo '<div class="col-md-4">';
                            echo '<div class="card " style="width: 18rem;">';
                                echo '<img src="'. $refrigerantesURL[$i] .'" width="200" class="card-img-top" >';
                                echo '<div class="card-body">';
                                    echo '<h5 class="card-title">' . $refrigerantes[$i] . '</h5>';
                                    echo '<a href="#" class="btn btn-primary">Comprar</a>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    }
				?>
            </section>
        </div>

    </main>
</body>
</html>

<!-- REFERENCIA DAS IMAGENS:
    mlking: https://www.google.com/url?sa=i&url=https%3A%2F%2Fbr.pinterest.com%2Falessandrossb%2Fpanfleto%2F&psig=AOvVaw2g44-ypL6S4QT3HYa5YLCh&ust=1724767856276000&source=images&cd=vfe&opi=89978449&ved=0CBcQjhxqFwoTCKis447rkogDFQAAAAAdAAAAABAv
    mlegg: https://www.google.com/url?sa=i&url=https%3A%2F%2Fharpersbazaar.uol.com.br%2Festilo-de-vida%2Fsete-enderecos-classicos-de-sao-paulo-para-comer-x-egg%2F&psig=AOvVaw1iTtHtDYk5rXPVFnxbVhcw&ust=1724764978204000&source=images&cd=vfe&opi=89978449&ved=0CBcQjhxqFwoTCNinhrHgkogDFQAAAAAdAAAAABAE
    mlbacon: https://www.google.com/url?sa=i&url=https%3A%2F%2Fembutidosbonatti.ind.br%2Freceitas%2Fx-bacon-5&psig=AOvVaw097rUPs9AIAwp5y528ChsC&ust=1724763983360000&source=images&cd=vfe&opi=89978449&ved=0CBcQjhxqFwoTCJib0dbckogDFQAAAAAdAAAAABAJ
    mlfritas: https://www.google.com/url?sa=i&url=https%3A%2F%2Fpt.vecteezy.com%2Fpng-gratis%2Fbatata-frita&psig=AOvVaw2VOQp9vjwjKekNxUEqxZdP&ust=1724764879316000&source=images&cd=vfe&opi=89978449&ved=0CBcQjhxqFwoTCICeh4LgkogDFQAAAAAdAAAAABAE
    mlnuggets: https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.sabornamesa.com.br%2Freceitas-de-lanches%2Fnuggets-caseiro-saudavel&psig=AOvVaw0YF7Z8G1ccSnbR85TZpipG&ust=1724764184965000&source=images&cd=vfe&opi=89978449&ved=0CBcQjhxqFwoTCLjDpbfdkogDFQAAAAAdAAAAABAE
    mlsalad: https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.womenshealthmag.com%2Ffood%2Fg44108480%2Ffast-food-salads-ranked%2F&psig=AOvVaw02t08qiXQWGbS6EgJZY6Sj&ust=1724764351060000&source=images&cd=vfe&opi=89978449&ved=0CBcQjhxqFwoTCMjhwobekogDFQAAAAAdAAAAABAE
    coca-cola:
    fanta: https://www.google.com/url?sa=i&url=https%3A%2F%2Fbr.pinterest.com%2Fpin%2F1030550327217354097%2F&psig=AOvVaw0lTHGlosF5TGk19zcWF1dO&ust=1724764649012000&source=images&cd=vfe&opi=89978449&ved=0CBcQjhxqFwoTCOjnwZTfkogDFQAAAAAdAAAAABAJ
    guaraná: https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.lamacelleria.com.br%2Fprodutos%2Fguarana-antarctica-lata-350ml%2F&psig=AOvVaw1P-FHSv502Ru-GdngG_L4f&ust=1724764631259000&source=images&cd=vfe&opi=89978449&ved=0CBcQjhxqFwoTCMDUy4vfkogDFQAAAAAdAAAAABAE
    
    -->
