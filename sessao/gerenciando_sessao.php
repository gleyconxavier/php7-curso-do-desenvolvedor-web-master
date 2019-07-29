<div class="titulo">Gerenciando Sessão</div>

<?php
// session_save_path('/tmp'); linux workaround
session_start();
// fb07a036258d1f2ea6a4ae693227ec87
echo session_id();

$contador = &$_SESSION['contador'];
$contador = $contador ? $contador +1 : 1;
echo '<br>' , $_SESSION['contador'];

// gera um novo id para sessao
if($_SESSION['contador'] % 5 === 0) {
    session_regenerate_id();
}

// destroy a sessao a cada 15 refresh
if($_SESSION['contador'] >= 15) {
    session_destroy();
}
