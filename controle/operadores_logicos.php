<div class="titulo">Operadores Lógicos</div>

<?php
echo "<p>Negação Lógica</p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true); // not

echo "<p>Tabela Verdade 'AND' (E)</p><hr>";
var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);

var_dump(true and true);
var_dump(true and false);
var_dump(false and true);
var_dump(false and false);

// echo "Tabela Verdade 'OR' (OU)</p><hr>";
echo "<br>";
echo "<br>";
echo "Tabela verdade 'OR' 'OU'<hr>";
var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);

echo "<p>Tabela Verdade 'XOR' (OU Exclusivo)</p><hr>";

var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor true);
var_dump(false xor false);

echo "<br><br>Parte com != <br><br>";
var_dump(true != true);
var_dump(true != false);
var_dump(false != true);
var_dump(false != false);

echo "<p class='divisao'>Exemplo</p><hr>";

$idade = "65";
$sexo = 'M';

$pagouPrevidencia = true;

$criterioHomem = ($idade >= 65 && $sexo === 'M');
$criterioMulher = ($idade >= 60 && $sexo === 'F');
$atingiuCriterio = $criterioHomem || $criterioMulher;
$podeSeAposentar = $pagouPrevidencia && $atingiuCriterio ;

if ($podeSeAposentar === true) {
    $podeSeAposentar = "sim, requisitos válidos";
} else if ($podeSeAposentar === false) {
    $podeSeAposentar = "não, requisitos não correspondem";
} else {
    $podeSeAposentar = "inconclusivo, não foi possível processar os requisitos";
}

echo "Pode se aposentar -> $podeSeAposentar.<br>";

?>

<style>
p {
    margin-bottom: 0px;
    font-weight: bold;
}

hr {
    margin-top: 0px;
}
</style>