<div class="titulo">Desafio Impressão</div>

<!-- 
    Enunciado:
    - Imprima apenas os valores do array que contém indice par
    - Desafio adicional: Resolver com for e foreach
    - Valores esperados: AAA, CCC, EEE
 -->

<?php
$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];

// duas versoes uma com for outra com foreach

foreach($array as $indice => $valor) {
    if($indice % 2 == 0) {
        echo $valor . "<br>";
    }
};

echo "Primeira parte com foreach, concluída";
echo '<hr>';

for($i = 0; $i < count($array); $i++) {
   if($i % 2 == 0) {
       echo "$array[$i] <br>";
    }
};