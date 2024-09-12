<!-- Crie uma classe chamada Ingresso que possui um valor em reais e um
método imprimeValor().
a. crie uma classe VIP, que herda Ingresso e possui um valor adicional. Crie um método que
retorne o valor do ingresso VIP (com o adicional incluído).
b. crie uma classe Normal, que herda Ingresso e possui um método que imprime: "Ingresso
Normal".
c. crie uma classe CamaroteInferior (que possui a localização do ingresso e métodos para
acessar e imprimir esta localização) e uma classe CamaroteSuperior, que é mais cara (possui
valor adicional). Esta última possui um método para retornar o valor do ingresso. Ambas as
classes herdam a classe VIP
 -->

<?php 
    class Ingresso
    {
        //atributos
        public $preco;
        public $tipo_ingresso; //o ex não pede mas é pra eu padronizar 

        //métodos
        function __construct($preco, $tipo_ingresso)
        {
            $this->__set('preco', $preco);
            $this->__set('tipo_ingresso', $tipo_ingresso);
        }

        function __set($atributo, $valor)
        {
            $this->$atributo = $valor;
        }

        function __get($atributo)
        {
            return $this->$atributo;
        }

        function imprimeValor()
        {
            echo "O valor do ingresso " . $this->__get('tipo_ingresso') . " é R$ " . $this->__get('preco');
        }
    }

    class VIP extends Ingresso
    {
        //atributos
        public $valor_adicional = 1.5; //50% de taxa adicional

        //métodos
        function acrescimoValor()
        {
            // echo $this->__get('preco') * $this->valor_adicional . "<br>"; 
            echo $this->__set('preco', ($this->__get('preco') * $this->valor_adicional));
        }

    }

    class Normal extends Ingresso
    {

    }

    class CamaroteInferior extends VIP
    {
        //atributos 
        public $fileira = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H');
        public $cadeira = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
        public $valor_fileira;
        public $valor_cadeira;

        public $confirmacao;

        //métodos
        function imprimirLocalizacao()
        {
            if($this->confirmacao == "sim")
            {
                if(in_array($this->valor_fileira, $this->fileira))
                {
                    if(in_array($this->valor_cadeira, $this->cadeira))
                    {
                        echo "Seu lugar se encontra na cadeira " . $this->valor_cadeira . " da fileira " . $this->valor_fileira;
                    }
                    else
                    {
                        echo "Seu assento não existe";
                    }
                }
                else
                {
                    echo "Seu assento não existe.";
                }
            }
        }
    }

    class CamaroteSuperior extends VIP
    {
        //atributos
        public $valor_adicional_camarote_superior = 2; //aumento de 100%

        //métodos
        function retornaValor()
        {
            echo "O preço do Camarote Superior é R$ " . $this->__get('preco') * $this->valor_adicional_camarote_superior . " reais";
        }
    }

    //OBJETOS
    $ingresso = new Ingresso('preco', 'tipo_ingresso');

    $vip = new VIP('preco', 'tipo_ingresso');
    $vip->__set('tipo_ingresso', 'VIP');
    $vip->__set('preco', 24);
    $vip->acrescimoValor();
    $vip->imprimeValor();

    echo "<hr>";

    $normal = new Normal('preco', 'tipo_ingresso');
    $normal->__set('tipo_ingresso', 'normal');
    $normal->__set('preco', 24);
    $normal->imprimeValor();

    echo "<hr>";

    $camaroteInferior = new CamaroteInferior('preco', 'tipo_ingresso');
    $camaroteInferior->__set('confirmacao', 'sim');
    $camaroteInferior->__set('valor_fileira', 'B');
    $camaroteInferior->__set('valor_cadeira', 4);
    $camaroteInferior->imprimirLocalizacao();

    echo "<hr>";

    $camaroteSuperior = new CamaroteSuperior('preco', 'tipo_ingresso');
    $camaroteSuperior->__set('preco', 24);
    $camaroteSuperior->retornaValor();

?>