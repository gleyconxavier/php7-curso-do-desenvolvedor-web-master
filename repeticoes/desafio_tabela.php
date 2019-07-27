<div class="titulo">Desafio Tabela</div>


<form action="#" method="post">
    Linhas
    <input name="linhas" type="number"></input>
    Colunas
    <input name="colunas" type="number"></input>
    <button href="#">Gerar</button>
</form>

<?php

// gerador matriz

echo "<table>";

if(isset($_POST["linhas"]) && isset($_POST["colunas"])){
    $linhas = $_POST["linhas"];
    $colunas = $_POST["colunas"];
    echo "Recebidos: cols > $colunas | rows > $linhas";
};

$num = 1;
for($i = 0; $i < $linhas; $i++) {
    echo "<tr>";
    for($e = 1; $e <= $colunas; $e++) {
        echo "<td> $num </td>";
        $num++;
    }
    echo '</tr>';
};
echo "</table>";

$matriz = [
    ['01', '02', '03', '04', '05'],
    ['06', '07', '08', '09', '10'],
    ['11', '12', '13', '14', '15'],
    ['16', '17', '18', '19', '20'],
];

// foreach($matriz as $linha) {
//     foreach($linha as $valor) {
//         echo "$valor ";
//     }
//     echo "<br>";
// }
?>

<table>
    <?php

        foreach($matriz as $linha) {
            echo '<tr>';
            foreach($linha as $valor) {
                if($valor % 2 == 0) {
                    echo '<td style="color: red";>'. "$valor</td>";
                    continue;
                }
                echo "<td>$valor</td>";
            }
            echo '</tr>';
        }
    ?>
</table>

<style>
    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border: 1px solid #444;
    }

    table td {
        padding: 10px 20px;
    }

</style>
