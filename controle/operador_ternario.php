<div class="titulo">Operador Ternário</div>

<?php
$idade = 17;
$status;

if($idade > 18) {
    $status = 'Maior de idade';
} else {
    $status = 'Menor de idade';
}

echo "$status <br>";

$status = $idade >= 18 ? 'Maior de idade' : 'Menor de idade';

echo "Ternário: $status<br>";

$status = $idade >= 18 ? $idade >= 65 ? 'Aposentado' : 'Maior de idade' : 'Menor de idade';

echo "Ternário Grande: $status<br>"; // não usar esse tipo de ternário, nõo é legível