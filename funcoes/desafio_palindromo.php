<div class="titulo">Desafio Palindromo</div>

<?php
// usar um laço for primeiro
// segundo usar alguma função
// string referente a doc

function palindromo ($palavra) {
    $ultimoIndice = strlen($palavra) - 1;
    for($i = 0; $i <= $ultimoIndice; $i++)  {
        if($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
            return 'Não';
        }
    }
    return 'Sim';
}

echo palindromo('gleycon') . '<br>';
echo palindromo('bola') . '<br>';
echo palindromo('arara') . '<br>';

function palindromoSimples($palavra) {
    return $palavra === atrrev($palavra) ? 'Sim' : 'Não';
}