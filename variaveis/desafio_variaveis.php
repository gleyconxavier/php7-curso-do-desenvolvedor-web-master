<div class="titulo">Desafio Variáveis</div>

<?php

$a = 'Nossa';
$Nossa = 'Eu';
$Eu = 'consegui';
$consegui = 'responder';
$responder = 'esse';
$esse = 'desafio';

// usando apenas a variavel $a, imprima a frase
// Nossa! Eu consegui responder esse desafio

echo '<br>';
echo "$a! {$$a} {$$$a} {$$$$a} {$$$$$a} {$$$$$$a}";