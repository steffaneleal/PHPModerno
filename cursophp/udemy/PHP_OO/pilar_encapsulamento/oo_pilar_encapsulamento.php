<?php 
    
    class Pai
    {
        //atributos
        private $nome = 'Steffane';
        protected $sobrenome = 'Leal';
        public $humor = 'Feliz';

        //métodos
        public function __get($atributo)
        {
            return $this->$atributo;
        }

        public function __set($atributo, $valor)
        {
            $this->$atributo = $valor;
        }

        private function executarMania()
        {
            echo "Assobiar";
        }

        protected function responder()
        {
            echo "Oi";
        }

        public function executarAcao()
        {
            $num = rand(1, 10); //número aleatório de 1 a 10

            if($num >= 1 && $num <= 8)
            {
                $this->executarMania();
            } else {
                $this->responder();
            }
        }
    }

    class Filho extends Pai
    {
        public function getAtributo($atributo)
        {
            return $this->$atributo;
        }
    }

    // $pai = new Pai();
    // echo $pai->executarAcao();
    // echo $pai->nome;
    // echo $pai->sobrenome;
    // echo "<br>";
    // echo $pai->sobrenome = 'Oliveira';

    $filho = new Filho();
    echo "<pre>";
    print_r($filho);
    echo "</pre>";
    
    //exibir os métodos do objeto
    echo "<pre>";
    print_r(get_class_methods($filho));
    echo "</pre>";

    echo $filho->__get('nome');
?>