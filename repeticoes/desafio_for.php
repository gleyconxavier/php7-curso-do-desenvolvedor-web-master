<div class="titulo">Desafio FOR</div>

<!-- 
    O laço deve exibir o seguinte:
#
##
###
####
#####
1) Pode usar incremento $i++ 
2) Nao pode usar incremento $i++

 -->

<?php

$veia = "#";
echo "Primeira solução.<br>";
for($i = 0; $i < 5; $i++) {
    echo $veia . "<br>";
    $veia .= '#';
}

echo "Segunda solução. <hr>";

for($veia = '#';$veia != '######'; $veia .= '#') {
    echo $veia . "<br>";
}
