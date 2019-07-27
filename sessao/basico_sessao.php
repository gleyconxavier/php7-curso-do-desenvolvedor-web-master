<div class="titulo">Básico Sessão</div>

<?php
session_save_path('/tmp');
session_start();

print_r($_SESSION);
echo '<br>';

if(!$_SESSION['nome']) {
    $_SESSION['nome'] = 'Visitante';
}

if(!$_SESSION['email']) {
    $_SESSION['email'] = 'visitante@dominio.com';
}

print_r($_SESSION);

?>

<p>
    <a href="basico_sessao_alterar.php">
        Alterar Sessão</a>
</p>