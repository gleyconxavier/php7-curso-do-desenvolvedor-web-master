<div class="titulo">Desafio Index</div>

<?php
$lista = array(
    1,
    4 => 2,
    3 => 3,
    'a' => 4,
    5,
    '9' => 6,
    '06' => 7,
    0 => 8
);

// Array( [1, 2, 3, 4, 5, 6, 7, 8] => valor) errei por 1 o 0 => 8 retorna o 8 para chave 0 no começo.
print_r($lista);