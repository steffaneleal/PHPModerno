<?php 
    
    class Pai
    {
        //atributos
        private $nome = 'Steffane';
        protected $sobrenome = 'Leal';
        public $humor = 'Feliz';

        //métodos
        public function getNome()
        {
            return $this->nome;
        }
    }

    $pai = new Pai();
    echo $pai->getNome();
    // $pai->humor = "Triste";
    // echo "<br>";
    // echo $pai->humor;

?>