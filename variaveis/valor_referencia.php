<div class="titulo">Valor x Referência</div>

<?php
$variavel = 'valor inicial';
echo $variavel;

// Atribuição por Valor
$variavelValor = $variavel;
echo " <br> $variavelValor";
$variavelValor = 'novo valor';
echo "<br>$variavel";
echo " $variavelValor";

// Atribuição por Referência
$variavelReferencia = &$variavel; // O & é necessário na variável que passará a referência.
$variavelReferencia = 'mesma referencia';

echo "<br>$variavel $variavelReferencia";