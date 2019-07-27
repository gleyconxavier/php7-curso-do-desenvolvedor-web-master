<div class="titulo">Variáveis variáveis</div>

<?php
$a = 'valorA';
$$a = 'valorAA';
echo "$a {$$a} ${$a} $valorA";

$epa = 'opa';
$opa = 'vish';
$vish = 'eita!!!!';
echo '<br>';
echo "$epa {$$epa} {$$$epa}";