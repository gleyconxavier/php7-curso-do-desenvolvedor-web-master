<div class="titulo">Escrever Arquivo</div>

<?php
$arquivo = fopen('text.txt', 'w');
fwrite($arquivo, "Valor inicial\n");
$str = "Segunda linha\n";
fwrite($arquivo, $str);
fclose($arquivo);
// esse modo abre e zera o arquivo e escreve
$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Novo Conteúdo");
fclose($arquivo);
// esse modo abre e adiciona ao arquivo
$arquivo = fopen('teste.txt', 'a');
fwrite($arquivo, " com novos valores\n");
fwrite($arquivo, "Adicionados em um segundo momento");
fclose($arquivo);
// habilitando os erros
init_set('display_erros', 1);
$arquivo = fopen('teste.txt', 'x'); // retorna um erro caso o arquivo exista

?>
