<?php 

    class Pessoa
    {
        //atributos
        private $nome;
        private $idade;
        private $sexo;

        //métodos
        //construct e destruct
        function __construct($nome, $idade, $sexo)
        {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
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


    }


?>