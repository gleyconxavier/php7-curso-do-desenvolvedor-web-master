<div class="titulo">Tipo String</div>

<?php
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também");
echo '<br>';

// concatenação
echo "Nós também" . ' somos';
echo ("Número é " . 123);
echo '<br>', "Também aceito", "virgulas";

echo '<br>';
echo "'Teste'" . '"Teste"' . '\'Teste\'' . "\"Teste\"" . "\\";

print("<br>Também existe a função print ");
print "<br>Também existe a função print";

// Algumas funções
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . mb_strlen("Eu também", "utf-8"); 
/* 
    mb_strlen e como o strlen porem existe correcao
    para encoding isso quer dizer que acentuacao nao
    sera contada como 2 caracteres.
*/
echo '<br>' . substr('Só uma parte mesmo', 7, 6); // parte, substr recorta do caractere x ao y
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso isso');