<div class="titulo">Desafio Sorteio</div>

<?php
$nomes = ["Elza", "Marcilene" , "Rapunzel", "Branca de neve", "Cinderela"];

$indice = array_rand($nomes);
echo "<div center><h2>$nomes[$indice]</h2></div>";

?>

<style>
    [center] {
        display: flex;
        justify-content: center;
    }
</style>