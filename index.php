<?php

// Basic routing script from Tania Rascia: https://www.taniarascia.com/the-simplest-php-router/


$request = $_SERVER['REDIRECT_URL'];

switch ($request) {
    case '/' :
        require __DIR__ . '/views/index.php';
        break;
    case '' :
        require __DIR__ . '/views/index.php';
        break;
    case '/about' :
        require __DIR__ . '/views/about.php';
        break;
    default:
        require __DIR__ . '/views/404.php';
        break;
}