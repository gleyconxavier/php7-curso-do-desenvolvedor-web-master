<div class="titulo">Classe Data</div>

<?php
class Data {
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar() {
        echo "{$this->dia}/{$this->mes}/{$this->ano}";
    }

}

$data = new Data;
echo $data->apresentar() . "<br>";

$aniversario = new Data;
$aniversario->dia = 15;
$aniversario->mes = 8;
$aniversario->ano = 2018;
$aniversario->apresentar();