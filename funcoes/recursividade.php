<div class="titulo">Recursividade</div>

<?php

// função recursiva, vai subtraindo o numero fornecido
// de um em um, ate ser menor ou igual a 1, enquanto
// passa a uma variavel que foi setada com o valor 0
// o valor atual do numero somando ao valor encontrado no outro loop.

function somaUmAte($numero) {
    $soma = 0;
    for(; $numero >=1; $numero--) {
        $soma += $numero;
    }
    return $soma;
}

echo somaUmAte(10) . '<br>';

function somaRecursivaUmAte($numero) {
    // condição de parada
    if($numero === 1) {
        return 1;
    } else {
        return $numero + somaRecursivaUmAte($numero - 1);
    }
}

echo somaRecursivaUmAte(150) . '<br>';
function somaRecursivaEconomica($numero) {
    return $numero === 1 ? 1 : $numero + somaRecursivaEconomica($numero -1);
}

echo somaRecursivaEconomica(150) . '<br>';