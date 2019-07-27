<div class="titulo">Argumentos & Retorno</div>

<?php
function obterMensagem() {
    return 'Seja bem vindo(a)!';
}

$m = obterMensagem();
echo $m;
echo '<br>', obterMensagem();
echo '<br>';
var_dump(obterMensagem());

function obterMensagemComNome($nome) {
    return "Bem vindo, {$nome}!";
}

$x = 4;
$y = 5;
echo '<br>', obterMensagemComNome('Wagner');

function soma($a, $b) {
    return $a + $b;
};

echo '<br>', soma($x, $y);

function trocaValor($a, $novoValor) {
    $a = $novoValor;
}

$variavel = 1;
trocaValor($variavel, 3);
echo '<br>', $variavel;

// esta chamando a variavel $a com &,
// ou seja, esta sendo chamada por referencia
// nao por valor, assim o valor neste endereco 
// e alterado independende do escopo de funcao

function trocaValorDeVerdade(&$a, $novoValor) {
    $a = $novoValor;
}

trocarValorDeVerdade($variavel, 5);
echo '<br>', $variavel;