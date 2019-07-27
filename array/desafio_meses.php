<div class="titulo">Desafio Meses</div>

<?php

/*
    Desafio era alterar o índice inicial do array
    para o valor 1, logo setando o primeiro valor
    para o indice 1 os demais se ajustam a ele.
*/

$meses = array (
    1 => "Janeiro",
    "Fevereiro",
    "Março",
    "Abril",
    "Maio",
    "Junho",
    "Julho",
    "Agosto",
    "Setembro",
    "Outubro",
    "Novembro",
    "Dezembro"
);

print_r($meses);

echo '<br>' . $meses[5];