<div class="titulo">Desafio 7 Erros</div>

<?php
interface Template {
    function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstratata implements Template {
    public function metodo3() {
        echo "Estou funcionando";
    }
}

class Classe extends ClasseAbstratata {
    function __construct($parametro) {

    }

    public function metodo1() {

    }

    public function metodo2($parametro) {

    }
}

$exemplo = new Classe('...');
$exemplo->metodo3();