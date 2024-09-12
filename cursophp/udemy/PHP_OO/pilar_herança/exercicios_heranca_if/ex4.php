<?php 

    class Imovel
    {
        //atributos
        public $rua;
        public $numero;
        public $bairro;
        public $preco;

        //métodos
        //construct e destruct
        function __construct($endereco, $preco)
        {
            $this->__set('endereco', $endereco);
            $this->__set('preco', $preco);
        }

        function __destruct()
        {
            
        }

        //getters e setters
        function __set($atributo, $valor)
        {
            $this->$atributo = $valor;
        }

        function __get($atributo)
        {
            return $this->$atributo;
        }

        function endereco()
        {
            echo "<br>Endereço: Rua " . $this->rua . ", " . $this->numero . " - Bairro: " . $this->bairro;
        }
    }

    class Novo extends Imovel
    {
        //atributos
        public $adicional_preco = 1.5; //50%

        //métodos
        function novo_preco()
        {
            $preco_atual = $this->preco * $this->adicional_preco;
            echo "O preço do imóvel novo é: " . $preco_atual . " reais";
        }
    }

    class Velho extends Imovel
    {
        //atributos
        public $desconto = 0.25; //25% de desconto

        //métodos
        function desconto()
        {
            $preco_atual = $this->preco - ($this->preco * $this->desconto);

            echo "O preço do imóvel velho é: " . $preco_atual . " reais";
        }
    }

    //OBJETOS
    $imovel = new Imovel('endereco', 'preco');

    $novo = new Novo('endereco', 'preco');
    $novo->__set('preco', 2500);
    $novo->__set('rua', "Nossa Senhora do Rocio");
    $novo->__set('numero', 606);
    $novo->__set('bairro', 'Centro');
    $novo->novo_preco();
    $novo->endereco();

    echo "<hr>";

    $velho = new Velho('endereco', 'preco');
    $velho->__set('preco', 2500);
    $velho->__set('rua', "Moisés Dias Martins");
    $velho->__set('numero', 28);
    $velho->__set('bairro', 'Centro');
    $velho->desconto();
    $velho->endereco();
?>