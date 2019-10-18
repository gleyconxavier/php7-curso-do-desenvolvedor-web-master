<?php

$errors = [];

if(isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
} elseif ($exception) {

}
if($exception) {
    $message = [
        'type' => 'error',
        'message' => $exception->getMessage()
    ];

    if(get_class($exception) === 'ValidationException') {
        $errors = $exception->getErrors();
    }
}

$erros = [];
$alertType = '';

if($message['type'] === 'error') {
    $alertType = 'danger';
} else {
    $alertType = 'sucess';
}

?>

<?php if($message): ?>
<div class="my-3 alert alert-<?= $alertType ?>">
    <?= $message['message'] ?>
</div>
<?php endif ?>
