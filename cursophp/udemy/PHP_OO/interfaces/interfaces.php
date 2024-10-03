<?php 
    interface EquipamentoEletronicoInterface {
        public function ligar();
        public function desligar();
    }

    //---------------------------------------------

    class Geladeira implements EquipamentoEletronicoInterface {
        public function abrirPorta() {
            echo "Abrir a porta";
        }

        public function ligar() {
            echo "Ligar";
        }

        public function desligar()
        {
            echo "Desligar";
        }
    }

    class TV implements EquipamentoEletronicoInterface {
        public function trocarCanal() {
            echo "Trocar o canal";
        }

        public function ligar() {
            echo "Ligar";
        }

        public function desligar() {
            echo "Desligar";
        }
    }

    $geladeira = new Geladeira();
    $tv = new TV();

?>

<?php 
    interface MamiferoInterface {
        public function respirar();
    }

    interface TerrestreInterface {
        public function andar();
    }

    interface AquaticoInterface {
        public function nadar();
    }

    //--------------------------------------

    class Humano implements MamiferoInterface, TerrestreInterface{
        public function respirar() {
            echo "Respirar";
        }

        public function andar() {
            echo "Andar";
        }

        public function conversar() {
            echo "Conversar";
        }
    }

    class Baleia implements MamiferoInterface, AquaticoInterface{
        public function respirar() {
            echo "Respirar";
        }

        public function nadar() {
            echo "Nadar";
        }

        public function esguichar() {
            echo "Esguichar";
        }
    }

    $humano = new Humano();
    $baleia = new Baleia();
    $humano->respirar();
    echo "<br>";
    $humano->andar();
    echo "<br>";
    $humano->conversar();
    echo "<br>";
    $baleia->esguichar();
?>

<?php 
    interface AnimalInterface {
        public function comer();
    }

    interface AveInterface extends AnimalInterface {
        public function voar();
    }

    class Papagaio implements AveInterface{
        public function comer(){
            echo "Comer";
        }

        public function voar() {
            echo "Voar";
        }
    }

    $papagaio = new Papagaio();
    $papagaio->comer();
    echo "<br>";
    $papagaio->voar();
?>