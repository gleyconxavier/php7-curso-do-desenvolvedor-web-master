<?php
loadModel('Login');
session_start();
$exception = null;

if(count($_POST) > 0)  {
    $login = new Login($_POST); // se houver chave email password em $_POST ja serao incorporados
    try {
        $user = $login->checkLogin(); // se o checkLogin estiver correto ele retorna o user
        $_SESSION['user'] = $user;
        header("Location: day_records.php");
    } catch(AppException $e) {
        $exception = $e;
    }

}

loadView('login', $_POST + ['exception' => $exception]);