<div class="titulo">Desafio Precedência</div>

<?php
echo '<p> 1. Qual o valor que será impresso?</p>';
echo 2 + 5 * 3 + (12 / 6) / (-8 + 2 ** 3); // inf : 0 : 17?

echo '<p> 2. Qual expressão imprime o valor 100?</p>';
echo ' a) ', (1 + 2) * 20 - 15;
echo ' b) ', 4 * 5 ** 2; // 25 x 4 = 100
echo ' c) ', 2 ** 3 ** 4 / 1e25;
echo ' d) ', 3 + ( 3 * 8) / 2 - 3;