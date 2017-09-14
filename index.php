<?php
error_reporting(E_ALL);
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

require 'ikos.php';

$app = new \Slim\App;

$app->get('/', '\Ikos:welcome');

$app->get('/show', '\Ikos:showUser');

$app->get('/test', '\Ikos:testFunction');

$app->run();

?>