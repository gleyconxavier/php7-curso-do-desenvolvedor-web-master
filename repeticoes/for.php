<div class="titulo">Laço FOR</div>

<!-- Usado para uma repetição com um limite já estabelecido -->

<?php
for($cont =1; $cont <= 5; $cont++) {
    echo "$cont <br>";   
}

echo "<hr>";

// omitindo a primeira parte do for, obs todas são opcionais.
for(; $cont <= 10; $cont++) {
    echo "$cont <br>";
}

for(; $cont <= 15; ) {
    echo "$cont <br>";
    $cont++;
}

echo "<hr>";

$array = ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];
// print_r($array);
echo '<br>';
for($i = 0; $i < count($array); $i++) {
    echo "{$array[$i]} <br>";
}

$matrix = [
    ['a', 'e','i', 'o', 'u'],
    ['b', 'c', 'd']
];

for($i = 0; $i < count($matrix); $i++) {
    for($j = 0; $j < count($matrix[$i]); $j++) {
        echo "{$matrix[$i][$j]} <br>";
    }
    echo '<br>';
}