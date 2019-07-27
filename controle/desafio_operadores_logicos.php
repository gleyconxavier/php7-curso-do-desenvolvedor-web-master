<div class="titulo">Desafio Operadores Lógicos</div>

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>

    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select {
        font-size: 1.8rem;
    }
</style>

<!--
    Dois trabalhos -> terça e quinta!
        -Se os dois forem executados -> TV 50' e Sorvete
        -Se apenas um for executado -> TV 32' e Sorvete
        -Se nenhum dos dois for executado -> Fica em casa mais saudável!
-->

<?php
// resposta

 $job1 = $_POST['t1'];
 $job2 = $_POST['t2'];

$respostas = array("
    TV 50' e Sorvete!", 
    "TV 32' e Sorvete!", 
    "Ficar em casa é mais saudável."
);

if($job1 && $job2) {
    print_r($respostas[0]);
} else if( $job1 xor $job2 ) {
    print_r($respostas[1]);
}else {
    print_r($respostas[2]);
}

?>