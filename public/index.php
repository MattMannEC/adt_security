<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '' :
        require __DIR__ . '/../views/index.php';
        break;
    case '/' :
        require __DIR__ . '/../views/index.php';
        break;

    case '/form' :
        require __DIR__ . '/../views/form.php';
        break;
    case '/form/' :
        require __DIR__ . '/../views/form.php';
        break;
    
    case '/admin' :
        require __DIR__ . '/../views/login.php';
        break;
    case '/admin/' :
        require __DIR__ . '/../views/login.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . '/../views/404.php';
        break;
}

