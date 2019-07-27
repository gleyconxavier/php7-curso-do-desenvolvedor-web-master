<div class="titulo">Classes</div>

<?php
class Cliente {
    // atributos, se quiser que fique vísivel fora da classe use public do contrário private.
    public $nome = 'Anônimo';
    public $idade = 18;
    public function apresentar() {
        echo "Nome: {$this->nome} Idade: {$this->idade}<br>";
    }
}

$c1 = new Cliente();
$c1->nome = 'Ana Silva';
$c1->idade = 27.5;
echo $c1->nome, '<br>';
$c1->apresentar();

$c2 = new Cliente();
$c2->nome = 'Gabriel';
$c2->idade = 43;
$c2->apresentar();
