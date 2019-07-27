<div class="titulo">Métodos Mágicos</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        echo 'Construtor invocado!<br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct() {
        echo 'E morreu';
    }

    // sempre quando entra em um contexto que é necessário converter para string
    // __toString acaba sendo chamado automaticamente
    public function __toString() {
        return "{$this->nome} tem {$this->idade} anos.";
    }

    public function apresentar() {
        echo $this . "<br>";
    }

    //le atributos ainda nao declarados
    public function __get($atrib) {
        echo "Lendo atributo não declarado: {$atrib}<br>";
    }

    public function __set($atrib, $valor) {
        echo "Alterando atributo não declarado: {$atrib}/{$valor}";
    }

    // quando é chamado um metodo de um objeto que não existe
    public function __call($metodo, $params) {
        echo "Tentando executar método '${metodo}'";
        echo "<br>, com os parametros: ";
        print_r($params);
    }
}

$pessoa = new Pessoa('Ricardo', 40); // __construct
$pessoa->apresentar(); // chamando o __toString
echo $pessoa, '<br>'; // chamando o __toString
$pessoa->nome = 'Reinaldo';

// chama o método diretamente sem __call

$pessoa->apresentar();

$pessoa->nomeCompleto; // __get
$pessoa->nomeCompleto = 'Muito Legal!!!<br>'; // __set

// acessa o atributo diretamente sem __get
echo $pessoa->nome;

// call pq o método não existe no objeto
$pessoa->exec(1, 'teste', true, [1, 2, 3]); 

$pessoa = null; // chamando __destruct