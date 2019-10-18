<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
// require_once(CONTROLLER_PATH . '/login.php');
$uri = urldecode($_SERVER['REQUEST_URI']);

if($uri === '/' || $uri === '' || $uri === '/index.php') {
    $uri = '/day_records.php';
}

require_once(CONTROLLER_PATH . "/{$uri}");

// require_once(CONTROLLER_PATH . '/day_records.php');

// loadView('login', ['texto' => 'abc 123']);
// require_once(VIEW_PATH . '/login.php');

// $user = new User(['name' => 'Francisco', 'email' => 'franciscorm@gmail.com']);
// echo $user::getSelect(['id' => 1], 'name, email');
// print_r(User::get(['name' => 'Chaves'], 'id, name, email'));
// echo '<hr>';
// foreach(User::get([], 'name') as $user) {
//     echo $user->name;
//     echo '<br>';
// };
// echo $user::getSelect(['name' => 'Chaves', 'email' => 'chaves@cod3r.com.br']);

// require_once(MODEL_PATH . '/Login.php');

// $login = new Login([
//     'email' => 'quico@cod3r.com.br',
//     'password' => 'a'
// ]);

// try {
//     $login->checkLogin();
//     echo 'Deu certo :)';
// } catch(Exception $e) {
//     echo 'Problema no login :P';
// }