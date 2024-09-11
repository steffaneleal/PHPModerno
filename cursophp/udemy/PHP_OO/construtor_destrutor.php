<?php 
    class Pessoa {

        public $nome;

        function __construct($nome)
        {
            echo 'Objeto iniciado';
            $this->nome = $nome;
        }

        function __get($atributo) {
            return $this->$atributo;
        }
    }

    $pessoa = new Pessoa('Jorge');

?>



<!-- AQUI FOI O QUE EU FIZ PRA EXERCITAR A MEMÓRIA ANTES DE COMEÇAR A VER O VÍDEO -->
<!-- <?php /* 

class Pessoa {
    //atributos
    public $nome = null;
    public $ra = null;
    public $curso = null;


    //métodos
    function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }

    function __get($atributo) {
        return $this->$atributo;
    }

    function alunoDocs(){
        echo "Declaramos que o aluno " . $this->__get('nome') . ", de registro acadêmico " . $this->__get('ra') . " está matriculado no curso de Engenharia " . $this->__get('curso');
    }
}

$pessoa = new Pessoa();
$pessoa->__set('nome', 'Stéffane');
$pessoa->__set('ra', 2312131);
$pessoa->__set('curso', 'Computação');
echo $pessoa->alunoDocs();
*/ ?> -->