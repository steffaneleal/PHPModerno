<!--
Implemente a classe Funcionario com nome, salario e os métodos
addAumento(double valor), ganhoAnual() e exibeDados() - imprime os valores do funcionário.
a. crie a classe Assistente, que também é um funcionário, e que possui um número de
matrícula (faça os métodos GET e SET). Sobrescreva o método exibeDados().
b. sabendo que os Assistentes Técnicos possuem um bônus salarial e que os Assistentes
Administrativos possuem um turno (dia ou noite) e um adicional noturno, crie as classes
Tecnico e Administrativo e sobrescreva o método ganhoAnual() de ambas as classes
(Administrativo e Tecnico).
-->

<?php 
    class Funcionario
    {
        //atributos 
        public $nome = null;
        public $salario = 2500;
        public $salario_anual = null;
        
        //métodos
        function __set($atributo, $valor)
        {
            $this->$atributo = $valor;
        }

        function __get($atributo)
        {
            return $this->$atributo;
        }

        function addAumento($valor)
        {
            $this->__set('salario', $this->__get('salario') + $valor ); 
        }

        function ganhoAnual()
        {
            // Calcula o salário anual (salário mensal * 12)
            $this->__set('salario_anual', $this->__get('salario') * 12);
        }

        function exibeDados()
        {
            echo "O funcionário " . $this->__get('nome') . " recebe por ano o total de " . $this->__get('salario_anual') . " reais.<br>";
        }
    }

    class Assistente extends Funcionario
    {
        //atributos
        public $numero_matricula = null;

        //métodos 

        // Sobrescrita do método exibeDados()
        function exibeDados()
        {
            echo "O funcionário " . $this->__get('nome') . ", de Número de Matrícula " . $this->__get('numero_matricula') . " recebe por ano o total de " . $this->__get('salario_anual') .  " reais.<br>";
        }
    }

    class Tecnico extends Assistente
    {
        //atributos
        public $bonus_salarial = 1.3; // bônus de 30%

        //métodos
        // Sobrescreve ganhoAnual para incluir o bônus no cálculo do salário anual
        function ganhoAnual()
        {
            // Calcula o salário com o bônus e multiplica por 12
            $salario_com_bonus = $this->__get('salario') * $this->bonus_salarial;
            $this->__set('salario_anual', $salario_com_bonus * 12);
        }

        // Sobrescreve exibeDados para exibir os dados do Técnico
        function exibeDados()
        {
            echo "O funcionário " . $this->__get('nome') . ", de Número de Matrícula " . $this->__get('numero_matricula') . " recebe por ano o total de " . $this->__get('salario_anual') . " reais.<br>";
        }
    }

    class Administrativo extends Assistente
    {
        //atributos
        public $turno = 'null';
        public $adicional_noturno = false;

        //métodos

        // Verifica se há adicional noturno e ajusta o salário
        function adicionalNoturno()
        {
            if($this->__get('turno') == 'noite' || $this->__get('turno') == 'noturno')
            {
                $this->__set('adicional_noturno', true);
                $this->__set('salario', $this->__get('salario') * 1.2); // aumento de 20% 
            }
        }

        // Sobrescreve ganhoAnual para incluir o adicional noturno no cálculo do salário anual
        function ganhoAnual()
        {
            // Se houver adicional noturno, o salário já foi ajustado
            $this->__set('salario_anual', $this->__get('salario') * 12);
        }

        // Sobrescreve exibeDados para exibir os dados do Administrativo
        function exibeDados()
        {
            $adicional = $this->__get('adicional_noturno') ? 'com adicional noturno' : 'sem adicional noturno';
            echo "O funcionário " . $this->__get('nome') . ", de Número de Matrícula " . $this->__get('numero_matricula') . " recebe por ano o total de " . $this->__get('salario_anual') . " reais " . $adicional . ".<br>";
        }
    }

    //Detalhe: para a próxima parte, precisa chamar todos os métodos para que eles sejam executados

    // Funcionario
    $funcionario = new Funcionario();
    $funcionario->__set('nome', 'Carlos');
    $funcionario->__set('salario', 3000);
    $funcionario->ganhoAnual(); // Calcula o salário anual
    $funcionario->addAumento(500); // Aumento de 500
    $funcionario->exibeDados();
    
    echo "<hr>";

    // Assistente
    $assistente = new Assistente();
    $assistente->__set('nome', 'Ana');
    $assistente->__set('numero_matricula', '12345');
    $assistente->__set('salario', 2800); // Definir salário
    $assistente->ganhoAnual(); // Calcula o salário anual
    $assistente->exibeDados();

    echo "<hr>";

    // Técnico
    $tecnico = new Tecnico();
    $tecnico->__set('nome', 'Junior');
    $tecnico->__set('numero_matricula', 31251);
    $tecnico->__set('salario', 3200); // Definir salário
    $tecnico->ganhoAnual(); // Calcula o salário anual com bônus
    $tecnico->exibeDados();

    echo "<hr>";
    
    // Administrativo
    $administrativo = new Administrativo();
    $administrativo->__set('nome', 'Steffane');
    $administrativo->__set('numero_matricula', 1212121);
    $administrativo->__set('turno', 'noturno'); // Define o turno
    $administrativo->__set('salario', 2900); // Definir salário
    $administrativo->adicionalNoturno(); // Aplica o adicional noturno
    $administrativo->ganhoAnual(); // Calcula o salário anual
    $administrativo->exibeDados();
?>