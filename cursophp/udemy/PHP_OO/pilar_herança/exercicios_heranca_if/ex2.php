<!-- Implemente os diagramas de classe do exercício -->

<?php 
    echo "<h1>Item a</h1>";

    class Animal
    {
        //atributos
        public $nome = null;
        public $raca = null;

        //métodos
        function __construct($nome, $raca)
        {
            $this->__set('nome', $nome);
            $this->__set('raca', $raca);
        }

        function __set($atributo, $valor)
        {
            $this->$atributo = $valor;
        }

        function __get($atributo)
        {
            return $this->$atributo;
        }

        function caminha()
        {
            
        }
    }

    class Cachorro extends Animal
    {
        //métodos
        function nome()
        {
            echo $this->__get('nome') . " é um cachorro da raça " . $this->__get('raca') . "<br>";
        }

        function late()
        {
            echo "AU AU";
        }
    }

    class Gato extends Animal
    {
        //métodos
        function nome()
        {
            echo $this->__get('nome') . " é um gato da raça gato " . $this->__get('raca') . "<br>";
        }
        
        function mia()
        {
            echo "MIAU";
        }
    }

    $animal = new Animal('Rex', 'labrador');
    $animal->__set('nome', 'Rex');

    $cachorro = new Cachorro('Luna', 'Lhasa-Apso');
    $cachorro->nome();
    $cachorro->late();
    echo "<hr>";

    $gato = new Gato('Tom', 'branco');
    $gato->nome();
    $gato->mia();

?>

<?php 
    echo "<h1>Item b</h1>";

    class Pessoa
    {
        //atributos
        public $nome = null;
        public $idade;

        //métodos
        function __construct($nome, $idade)
        {
            $this->__set('nome', $nome);
            $this->__set('idade', $idade);
        }

        function __set($atributo, $valor)
        {
            $this->$atributo = $valor;
        }

        function __get($atributo)
        {
            return $this->$atributo;
        }
    }

    class Rica extends Pessoa
    {
        public $dinheiro;

        //métodos
        function fazCompras()
        {
            echo $this->__get('nome') . ", tem " . $this->__get('idade') . " anos e fez uma compra de " . $this->__get('dinheiro') . " reais. <br>";
        }
    }

    class Pobre extends Pessoa
    {
        //métodos 
        function trabalha()
        {
            echo $this->__get('nome') . " está trabalhando. <br>";
        }
    }

    class Miseravel extends Pessoa
    {
        //métodos
        function mendiga()
        {
            echo $this->__get('nome') . " está em condição de rua. <br>";
        }
    }


    $pessoa = new Pessoa('Ana', 32);
    $pessoa->__set('nome', 'Ana');
    $pessoa->__set('idade', 32);

    $rica = new Rica('Pietra', 38, 2000);
    $rica->__set('nome', 'Pietra');
    $rica->__set('idade', 38);
    $rica->__set('dinheiro', 2000);
    $rica->fazCompras();
    echo "<hr>";

    $pobre = new Pobre('Ste', 22);
    $pobre->trabalha();

    echo "<hr>";

    $miseravel = new Miseravel('Pedro', 25);
    $miseravel->mendiga();
?>