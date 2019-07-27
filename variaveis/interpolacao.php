<div class="titulo">Interpolação</div>

<?php
$numero = 10;
echo $numero;
echo '<br> $numero';
echo "<br> $numero"; // aspas duplas habilitando interpolacao da variavel

$texto = "A sua nota é $numero";
echo "<br>$texto";

$objeto = 'caneta';
// echo "Eu tenho 5 $objetos";
echo "<br>Eu tenho 5 {$objeto}s";
echo "<br>Eu tenho 5 { $objeto}s mas perdi 3 {$objeto }s";
echo "<br>";
echo "$numero + 1";