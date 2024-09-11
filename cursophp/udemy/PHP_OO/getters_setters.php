<?php 
echo "<h1>Getters e Setters</h1>";
class Funcionario{
    // public $nome = 'Júnior';
    // public $idade = '20';
    // public $setor = 'Engenharia';
    public $nome = null;
    public $idade = null;
    public $setor = null;

    //setters -> setar ou definir os valores dos atributos dos objetos
    function setNome($nome) {
        $this->nome = $nome;
    }

    function setIdade($idade){
        $this->idade = $idade;
    }

    function setSetor($setor){
        $this->setor = $setor;
    }

    //getters 
    function getNome() {
        return $this->nome;
    }

    function getIdade() {
        return $this->idade;
    }

    function getSetor() {
        return $this->setor;
    }

    //métodos
    function resumirCadFunc() {
        return "$this->nome tem $this->idade anos e trabalha no setor de $this->setor";
    }

    function modificarSetor($setor) {
        //afetar um atributo do objeto
        $this->setor = $setor;
    }

}

$funcionario = new Funcionario();
$funcionario->setNome('Junior');
$funcionario->setIdade(20);
$funcionario->setSetor('Mecânica');
//echo $funcionario->resumirCadFunc();
echo $funcionario->getNome() . ' tem ' . $funcionario->getIdade() . ' anos e trabalha no setor de ' . $funcionario->getSetor(); //também funciona igual ao comentado de cima
echo "<hr>";

$funcionario2 = new Funcionario();
$funcionario2->setNome('Rythi');
$funcionario2->setIdade(22);
$funcionario2->setSetor('Computação');
$funcionario2->modificarSetor('Software');
echo $funcionario2->resumirCadFunc();
?>


<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


<?php 
echo "<hr>";
echo "<h1>Getters e Setters mágicos (overloading de atributos e métodos)</h1>";

class Funcionarios { //precisei mudar o nome pq tava dando conflito com a classe do outro php de cima
    //atributos
    public $nome = null;
    public $idade = null;
    public $setor = null;
    public $cargo = null;
    public $salario = null;

    function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }

    function __get($atributo) {
        return $this->$atributo; //aqui não é $this->valor pq estou retornando o atributo de retorno
    }

        //métodos
        function resumirCadFunc() {
            return "$this->nome tem $this->idade anos, trabalha no setor de $this->setor como $this->cargo e recebe R$ $this->salario reais por mês.";
        }
    
        function modificarSetor($setor) {
            //afetar um atributo do objeto
            $this->setor = $setor;
        }    
}

$funcionarios = new Funcionarios();
$funcionarios->__set('nome', 'Júnior');
$funcionarios->__set('idade', 20);
$funcionarios->__set('setor', 'Mecânica');
$funcionarios->__set('cargo', 'Engenheiro');
$funcionarios->__set('salario', 12500);
//echo $funcionarios->resumirCadFunc();
echo $funcionarios->__get('nome') . ' tem ' . $funcionarios->__get('idade') . ' anos, trabalha no setor de ' . $funcionarios->__get('setor') . ' como ' . $funcionarios->__get('cargo') . ' e recebe R$ ' . $funcionarios->__get('salario') . ' reais por mês.';
?>


<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


<?php 
echo "<hr>";
echo "<h1>Chamando métodos internamente</h1>";

class Funcionarioss{
    //atributos
    public $nome;
    public $idade;
    public $setor;
    public $cargo;
    public $salario;

    //métodos getters e setters
    function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }

    function __get($atributo) {
        return $this->$atributo;
    }
    
    function resumirCadFunc() {
        return $this->__get('nome') . ' tem ' . $this->__get('idade') . ' anos, trabalha no setor de ' . $this->__get('setor') . ' como ' . $this->__get('cargo') . ' e recebe R$' . $this->__get('salario') . ' reais por mês.';
    }
}

$funcionarioss = new Funcionarioss();
$funcionarioss->__set('nome', 'Junior');
$funcionarioss->__set('idade', 20);
$funcionarioss->__set('setor', 'Mecânica');
$funcionarioss->__set('cargo', 'Engenheiro');
$funcionarioss->__set('salario', 13500);
echo $funcionarioss->resumirCadFunc();
//OU
echo "<br>";
echo $funcionarioss->__get('nome') . ' tem ' . $funcionarioss->__get('idade') . ' anos, trabalha no setor de ' . $funcionarioss->__get('setor') . ' como ' . $funcionarioss->__get('cargo') . ' e recebe R$' . $funcionarioss->__get('salario') . ' reais por mês.';

echo "<br>";
$funcionarioss2 = new Funcionarioss();
$funcionarioss2->__set('nome', 'Rythi');
$funcionarioss2->__set('idade', 22);
$funcionarioss2->__set('setor', 'Software');
$funcionarioss2->__set('cargo', 'Engenheiro');
$funcionarioss2->__set('salario', 13500);
echo $funcionarioss2->resumirCadFunc();
?>