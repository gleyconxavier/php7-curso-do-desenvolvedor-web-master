<div class="titulo">Desafio Recursão</div>

<?php

/* 
    $array = [1, 2, [3, 4, 5,], 6, [7, [8, 9]]];
    >1
    >2
    >>3
    >>4
*/

$array = [1, 2, [3, 4, 5,], 6, [7, [8, 9]]];

function imprimirArray($array, $nivel = '>') {
    foreach($array as $elemento) {
        if(is_array($elemento)) { // segredo da logica que nao consegui pensar, validacao se e um array para adicionar o nivel -.-'
            imprimirArray($elemento, $nivel . $nivel[0]);
        } else {
            echo "$nivel $elemento<br>";
        }
    }
}

imprimirArray($array);
imprimirArray($array, 'S');