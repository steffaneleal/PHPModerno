<?php 

    class Carro extends Veiculo // o extends diz que essa classe é filha de Veiculo
    {
        //atributos
        public $tetoSolar = true;

        //métodos
        function __construct($placa, $cor) // o construtor busca os atributos da classe pai
        {
            $this->placa = $placa; //importante pensar para não confundir que o $this->placa não tem o $ no placa pela mesma razão que quando a gente passa por parâmetro lá no objeto a gente passa 'placa'
            $this->cor = $cor;
        }


        function abrirTetoSolar(){
            echo 'Abrir teto solar';
        }

        function alterarPosicaoVolante(){
            echo 'Alterar posição do volante';
        }
    }

    class Moto extends Veiculo
    {
        //atributos
        public $contraPesoGuidao = true;

        //métodos
        function __construct($placa, $cor)
        {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function empinar(){
            echo 'Empinar';
        }
    }

    class Veiculo 
    {
        //atributos
        public $placa = null;
        public $cor = null;

        //métodos
        function acelerar(){
            echo 'Acelerar';
        }

        function frear(){
            echo "Frear";
        }
    }

    $carro = new Carro('ABC1234', 'vermelho');
    $moto = new Moto('DEF1122', 'preto');

    echo "<pre>";
    print_r($carro);
    echo "<br>";
    print_r($moto);
    echo "</pre>";
    echo "<hr>";

    $carro->abrirTetoSolar();
    echo "<br>";
    $carro->acelerar(); //para chamar o método acelerar() que o método extende de veículo é do mesmo jeito
    echo "<br>"; 
    $carro->frear();

    echo "<hr>";
    
    $moto->empinar();
    echo "<br>";
    $moto->acelerar();
    echo "<br>";
    $moto->frear();
?>