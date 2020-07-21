<?php

$request = $_SERVER['REQUEST_URI'];

$publicRoot = "/routing/";

switch ($request) {
    case $publicRoot . 'about' :
        echo $publicRoot . 'about';
        require __DIR__ . '/views/about.php';
        break;
    case $publicRoot . 'about/' :
        echo $publicRoot . 'about/';
        require __DIR__ . '/views/about.php';
        break;
    case $publicRoot . '/' :
        echo $publicRoot . '/';
        require __DIR__ . '/views/index.php';
        break;
    case $publicRoot . '' :
        echo $publicRoot . '' ;
        require __DIR__ . '/views/index.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}