<div class="titulo">Usando Tipos</div>

<?php
function somar1($a, $b) {
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo somar1(1, 2) . '<br>';
echo somar1(1.7, 2.5) . '<br>';
echo somar1(1, '4dois') . '<br>';

// passando a funcao somar sobre duas variaveis que estao
// sendo definidas como inteiros.
function somar2(int $a, int$b) {
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo "<br>Retorno de inteiros<hr>";

echo somar2(1, 2) . '<br>';
echo somar2(1.7, 2.5) . '<br>';
echo somar2(1, '4dois') . '<br>';

function somar3($a, $b): int { // este : determina o tipo do retorno da funcao
    echo "<span> Somando $a + $b =</span>";
    return $a + $b;
}