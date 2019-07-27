<div class="titulo">Desafio Equação</div>

<?php

// parte 1
$resA = (6 * (3 + 2)) ** 2 / (3 * 2);
$resB = ((1 - 5) * ((2 - 7) / 2)) ** 2;

$resC = $resA - $resB;

// Resultado
echo( '<br>' . ($resC ** 3) / (10 ** 3));