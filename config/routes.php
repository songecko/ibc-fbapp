<?php

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();

//Homepage
$routes->add('homepage', new Routing\Route('/', array(
    '_controller' => 'Ibc\Controller\MainController::indexAction'
)));

//Like
$routes->add('like', new Routing\Route('/like', array(
    '_controller' => 'Ibc\Controller\MainController::likeAction'
)));

//Register
$routes->add('register', new Routing\Route('/register', array(
		'_controller' => 'Ibc\Controller\MainController::registerAction'
)));

return $routes;