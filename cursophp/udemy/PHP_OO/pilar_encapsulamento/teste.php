<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste objeto</title>
</head>
<body>
    <?php 
        class Carro 
        {
            public $marca;
            public $modelo;
            public $placa;
            public $documento;
            private $proprietario;
            public $numeroDaMarcha;

            public function __construct($marca, $modelo, $placa, $documento, $proprietario)
            {
                $this->marca = $marca;
                $this->modelo = $modelo;
                $this->placa = $placa;
                $this->documento = $documento;
                $this->proprietario = $proprietario;
                $this->numeroDaMarcha = 0;
            }

            public function __set($atributo, $valor)
            {
                $this->$atributo = $valor;
            }

            public function __get($atributo)
            {
                return $this->$atributo;
            }

            public function infos()
            {
                echo $this->proprietario . " é dona de um " . $this->modelo . " da marca " . $this->marca . ", placa " . $this->placa . " e de número de documento " . $this->documento;
            }

            public function passarMarcha()
            {
                echo "Marcha " . $this->numeroDaMarcha;
            }   

            public function aumentarMarcha()
            {
                $this->numeroDaMarcha++;
                echo "Marcha " . $this->numeroDaMarcha;
            }

            public function diminuirMarcha()
            {
                $this->numeroDaMarcha--;
                echo "Marcha " . $this->numeroDaMarcha;
            }

        }

        $carro = new Carro('renault', 'duster', 'abc1234', 1241251, 'Stéffane Leal');
        $carro->infos();
        echo "<br><br>";
        $carro->passarMarcha();
        echo "<br>";
        $carro->aumentarMarcha();
        echo "<br>";
        $carro->aumentarMarcha();
        echo "<br>";
        $carro->aumentarMarcha();
        echo "<br>";
        $carro->diminuirMarcha();

    
    ?>
</body>
</html>