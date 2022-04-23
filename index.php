<?php

require 'views/site/inc/Slim/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$app->get(
    '/',
    function () {
        require_once("views/site/index.phtml");
    }
);

$app->get(
    '/login',
    function () {
        require_once("views/site/login.phtml");
    }
);

$app->get(
    '/register',
    function () {
        require_once("views/site/register.phtml");
    }
);
        
$app->run();
