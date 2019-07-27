<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="number" name="param">
    <select name = "conversao" id = "conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metros > Km</option>
        <option value="km-metro">Km > Metros</option>
        <option value="cel-fah"> Celsius > Fahrenheit </option>
        <option value="fah-cel"> Fahrenheit > Celsius </option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php

if(isset($_POST['param']) && $_POST['param'] != 0 && isset($_POST['conversao'])) {

    $param =  $_POST['param'];
    $conversao = $_POST['conversao'];
    $param = ((int)$param);

    switch($conversao) {

        case 'km-milha':
            $param *= 0.62137;
            $conversao = 'quilômetros para milhas';
            $metric = 'milha(s)';
            break;

        case 'milha-km':
            $param = $param / 0.62137;
            $conversao = 'milhas para quilômetros';
            $metric = 'quilômetro(s)';
            break;

        case 'metro-km':
            $param = $param * 0.001;
            $conversao = 'metro para quilômetros';
            $metric = 'quilômetro(s)';
            break;

        case 'km-metro':
            $param = $param / 0.001;
            $conversao = 'quilômetros para metros';
            $metric = "metro(s)";
            break;

        case 'cel-fah':
            $param = $param * 1.8 + 32;
            $conversao = 'celsius para fahrenheit';
            $metric = "fahrenheit(s)";
            break;

        case 'fah-cel':
            $param = ($param -32) * (1 / 1.8);
            $conversao = 'fahrenheit para celsius';
            $metric = "celsius";
            break;
        
        default:
            $conversao = 'não foi possível processar';
    }

    $param = number_format($param, 0, ',', '.');
    echo ("$conversao : $param $metric");

} else {
    echo("Insira os dados.");
}