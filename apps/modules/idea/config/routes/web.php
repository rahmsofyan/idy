<?php

$router->add('/add'
	,[
	'namespace'  => 'Idy\Idea\Controllers\Web',
	'module' =>'idea',
    'controller' => 'Idea',
    'action'     => 'addView',
]);


$router->add('/send'
	,[
	'namespace'  => 'Idy\Idea\Controllers\Web',
	'module' =>'idea',
    'controller' => 'Idea',
    'action'     => 'add',
]);
