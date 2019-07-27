<?php
session_save_path('/tmp');
session_start();

print_r($_SESSION);
?>

<?php
$_SESSION['email'] = 'gabrielfilho_alterado@emailaz.com.br';
$_SESSION['nome'] = 'Gabriel';
?>

<p>
    <b>Nome: </b> <?= $_SESSION['nome'] ?><br>
    <b>E-mail: </b> <?= $_SESSION['email'] ?>
</p>



<p>
    <a href="basico_sessao.php">Voltar</a>
</p>
<p>
    <a href="basico_sessao_limpar.php">Limpar Sessão</a>
</p>