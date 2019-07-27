<?php
session_save_path('/tmp');
session_start();
session_destroy();
unset($_COOKIE['usuario']);
setcookie('usuario', '');
header('Location: login.php');