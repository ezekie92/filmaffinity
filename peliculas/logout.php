<?php
session_start();
$_SESSION = [];
// Eliminar la cookie
$params = session_get_cookie_params();
setcookie(
    session_name(),
    '',
    1,
    $params['path'],
    $params['domain'],
    $params['secure'],
    $params['httponly']
);
session_destroy();
header('Location: index.php');
