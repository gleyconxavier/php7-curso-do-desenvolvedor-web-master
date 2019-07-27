<div class="titulo">Operações PHP</div>

<?php
$dados1 = [
    "nome" => "Jose",
    "idade" => 28
];

$dados2 = [
    "nome" => "Maria",
    "naturalidade" => "Fortaleza"
];

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos); // verificar se é um array
echo '<br>' . count($dadosCompletos); // verificar quantidade de elementos do array

echo '<br>';
$indice = array_rand($dadosCompletos); // pega um indice do array de forma randomica
echo "$indice = $dadosCompletos[$indice]";
echo '<br>';
echo "{$dadosCompletos['idade']}"; // par de chaves é necessário para interpolar array com string
echo " ${dadosCompletos['idade']}"; // outra forma de interpolar

// removendo elemento de array
unset($dadosCompletos["nome"]);
echo '<br>';
print_r($dadosCompletos);

// removendo o próprio array
unset($dadosCompletos);
echo "<br>";
var_dump($dadosCompletos);

// prioridade para o lado esquerdo
$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

$decimais = $pares + $impares;
echo '<br>';
print_r($decimais);

// juntar esses dois arrays
$decimais = array_merge($pares, $impares);
echo '<br>';
print_r($decimais);

// embaralhar os arrays tambem altera o array original
sort($decimais);
echo '<br>';
print_r($decimais);
