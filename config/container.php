<?php

use Symfony\Component\DependencyInjection;
use Symfony\Component\DependencyInjection\Reference;

$sc = new DependencyInjection\ContainerBuilder();

$sc->register('context', 'Symfony\Component\Routing\RequestContext');
$sc->register('matcher', 'Symfony\Component\Routing\Matcher\UrlMatcher')
	->setArguments(array($routes, new Reference('context')))
;
$sc->register('resolver', 'Gecky\Controller\ControllerResolver')
	->setArguments(array($sc))
;
$sc->register('listener.router', 'Symfony\Component\HttpKernel\EventListener\RouterListener')
	->setArguments(array(new Reference('matcher')))
;
$sc->register('listener.response', 'Symfony\Component\HttpKernel\EventListener\ResponseListener')
	->setArguments(array('UTF-8'))
;
$sc->register('listener.exception', 'Symfony\Component\HttpKernel\EventListener\ExceptionListener')
	->setArguments(array('Gecky\\Controller\\ErrorController::exceptionAction'))
;
$sc->register('dispatcher', 'Symfony\Component\EventDispatcher\EventDispatcher')
	->addMethodCall('addSubscriber', array(new Reference('listener.router')))
	->addMethodCall('addSubscriber', array(new Reference('listener.response')))
	->addMethodCall('addSubscriber', array(new Reference('listener.exception')))
;
$sc->register('database', 'Gecky\Database\Db')
	->setArguments(array(array(
		'host'  => 'localhost',
		'username' => 'root',
		'password' => '123456',
		'database' => 'ibc'
	)))
;
$sc->register('facebook', 'Gecky\Facebook\Facebook')
	->setArguments(array(array(
		'appId'  => '571679062921497',
		'secret' => '82506414912598f5f9604bf13d19b985',
		'allowSignedRequest' => true, // optional, but should be set to false for non-canvas apps
		'cookie' => true
	)))
	->addMethodCall('init', array('http://tresepic.com/clients/ibc', 'https://www.facebook.com/ibanca/app_571679062921497'))
;
$sc->register('mobile_detect', 'Mobile_Detect');
$sc->register('gecky.framework', 'Gecky\Framework')
	->setArguments(array(new Reference('dispatcher'), new Reference('resolver'), '%debug%'))
;

return $sc;