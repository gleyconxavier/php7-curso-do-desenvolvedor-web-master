<?php
// session_save_path('/tmp'); // linux workaround
session_start();

if($_COOKIE['usuario']) {
    $_SESSION['nome'] = $_COOKIE['usuario'];
}

if(!$_SESSION['usuario']) {
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="assets/css/exercicio.css">
    <title>Curso PHP</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercícios</h2>
    </header>
    <nav class="navegacao">
        <span class="usuario">Usuário: <?= $_SESSION['nome'] ?></span>
        <a href="logout.php">Sair</a>
        <a href=<?= "{$_GET['dir']}/{$_GET['file']}.php" ?>
            class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
                // include($_GET['dir']."/".$_GET['file'].".php");
                include(__DIR__."/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS &copy; <?= date('Y');?>
    </footer>
</body>
</html>
