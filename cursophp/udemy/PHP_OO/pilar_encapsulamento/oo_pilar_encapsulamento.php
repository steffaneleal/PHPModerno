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

        //métodos simples
        //PRIVATE
        // public function getNome()
        // {
        //     return $this->nome;
        // }

        // public function setNome($value)
        // {
        //     if(strlen($value) >= 3)
        //     {
        //         $this->nome = $value;
        //     }
        // }


        // //PROTECTED
        // public function getSobrenome()
        // {
        //     return $this->sobrenome;
        // }

        // public function setSobrenome($value)
        // {
        //     $this->sobrenome = $value;
        // }
    }

    $pai = new Pai();
    echo $pai->executarAcao();
    // echo $pai->nome;
    // echo $pai->sobrenome;
    // echo "<br>";
    // echo $pai->sobrenome = 'Oliveira';
?>