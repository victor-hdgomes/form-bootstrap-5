<?php

require 'views/site/inc/Slim/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$app->get(
    '/',
    function () {
        require_once("views/site/index.php");
    }
);
        
$app->run();
