<?php

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();

//Homepage
$routes->add('homepage', new Routing\Route('/', array(
    '_controller' => 'Ibc\Controller\MainController::indexAction'
)));

//Like page
$routes->add('like', new Routing\Route('/like', array(
    '_controller' => 'Ibc\Controller\MainController::likeAction'
)));

return $routes;