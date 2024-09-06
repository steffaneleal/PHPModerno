<?php 
    echo "Paradigma Procedural";
    echo "<br>";
    $numero1 = 10;
    $numero2 = 7;
    $operador = 'soma';

    function calcular($numero1, $numero2, $operador) {
        if($operador == 'soma'){
            return $numero1 + $numero2;
        }

        return false;
    }

    echo calcular($numero1, $numero2, $operador);
?>

<?php 
    echo "<hr>";
    echo "Paradigma de Orientação a Objetos";
    echo "<br>";

    //classe
    class Calculadora {
        //atributos ou propriedades
        public $numero1 = 10;
        public $numero2 = 7;
        public $operador = 'soma';

        //método
        public function calcular() {
            if($this->operador == 'soma'){
                return $this->numero1 + $this->numero2;
            }

            return false;
        }
    }

    //criação do objeto
    $calcular = new Calculadora();
    echo $calcular->calcular();

?>