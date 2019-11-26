<?php
use Phalcon\Mvc\Router;
$router = new Router(false);

$router->add('/:controller/:action/:params', [
    'namespace'  => 'MyApp\Controllers',
    'controller' => 1,
    'action'     => 2,
    'params'     => 3,
]);

$router->add('/tes'
	,[
	'namespace'  => 'MyApp\Controllers',
    'controller' => 'Idea',
    'action'     => 'add',
]);


return $router;
