<?php 
    //modelo
    class Funcionario { //camelCase
        //atributos
        public $nome = 'José';
        public $telefone = '11 914123415';
        public $numFilhos = 2; //camelCase a partir da segunda palavra

        //métodos
        function resumirCadFunc() { //na prática o método é uma função
            return "$this->nome possui $this->numFilhos filho(s)"; //a gente usa o $this-> para falar que o atributo utilizado é do objeto em questão
        }

        function modificarNumFilhos($numFilhos) {
            //afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
        }
    }

    //criando um objeto
    $y = new Funcionario(); 
    echo $y->resumirCadFunc();
    echo "<br>";
    echo $y->modificarNumFilhos(3);
    echo $y->resumirCadFunc();
    echo "<hr>";

    $x = new Funcionario();
    echo $x->resumirCadFunc();
    echo "<br>";
    $x->modificarNumFilhos(1);
    echo $x->resumirCadFunc();
?>