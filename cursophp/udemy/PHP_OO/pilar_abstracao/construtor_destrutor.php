<?php
    echo "<h1>Pessoa</h1>";

	class Pessoa {
			//atributo
			public $nome;
			
			//construtor e destrutor
			function __construct($nome){
					echo 'Objeto iniciado';
					$this->nome = $nome; //isso aqui é só pra mostrar que é possível
			}
			
			function __destruct(){
					echo 'Objeto removido';
			}
		
			function __get($atributo){
					return $this->$atributo;
			}
			
			function correr(){
					return $this->__get('nome') . ' está correndo';
			}
	}

	$pessoa = new Pessoa('Jorge');
	echo '<br>Nome: ' . $pessoa->__get('nome');
	echo '<br>' . $pessoa->correr();
	
	echo '<br>';
	unset($pessoa); //proposital

?>

<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<?php

    echo "<br><br><h1>Carro</h1>";
    class Carro {
        //atributos
        public $marca;
        public $modelo;
        public $cor = 'vermelho';
        public $ligado = false; 
        
        //precisei comentar aqui pq tava dando interferência no exercício que eu estava fazendo no arquivo php oo_pilar_heranca.php, mas se precisas testar aqui de novo, pode "descomentar"
        // function __construct($marca, $modelo)
        // {
        //     $this->marca = $marca;
        //     $this->modelo = $modelo;
        //     echo 'O objeto carro foi construído';
        // }

        function __destruct()
        {
            echo "<br>";
            echo 'O objeto carro foi removido';
        }

        function ligar(){
            $this->ligado = true;
            echo "<br>";
            echo 'O carro foi ligado.';
        }
    }

    $carro = new Carro('Fiat', 'Uno'); //passa por parâmetro os valores dos atributos
    $carro->ligar();
    unset($carro); //proposital
?>

<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<?php

echo "<br><br><h1>Computador</h1>";

class Computador
{
    //atributos
    public $temperaturaProcessador;
    public $armazenamento;
    public $armazenamentoTotal = 1000;
    public $ligado = false;

    function __construct($temperaturaProcessador)
    {
        $this->temperaturaProcessador = $temperaturaProcessador;
    }

    function __destruct()
    {
        echo "<br><br>O computador foi desligado e o objeto computador removido.";
    }

    function ligar()
    {
        $this->ligado = true;
        echo "<br> O Computador está ligado";
    }

    function liberarEspaco($armazenamento) 
    {
        $this->armazenamentoTotal -= $armazenamento;
        echo "<br><br>Novo armazenamento: ";
        echo "<br>Removido: " . $armazenamento . 'GB';
        echo "<br>Disponível: " . $this->armazenamentoTotal . 'GB';
    }

    function ligouWC($temperaturaProcessador) 
    {
        echo "<br><br>Temperatura: ";
        echo "<br>Temperatura antes de ligar o Water Cooler: " . $this->temperaturaProcessador . '°C';
        $this->temperaturaProcessador*=0.8;
        echo "<br>Temperatura após ligar o WC: " . $this->temperaturaProcessador . '°C';
    }
}

$computador = new Computador(70);
$computador->ligar();
$computador->liberarEspaco(200);
$computador->ligouWC(80);
?>