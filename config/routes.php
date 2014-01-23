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

//Register list
$routes->add('register_list', new Routing\Route('/register-list', array(
		'_controller' => 'Ibc\Controller\MainController::registerListAction'
)));

//Download excel
$routes->add('download_excel', new Routing\Route('/descargar-excel', array(
		'_controller' => 'Ibc\Controller\MainController::downloadExcelAction'
)));

return $routes;