<?php

namespace Gecky;

use Symfony\Component\Routing;
use Symfony\Component\HttpKernel;
use Symfony\Component\HttpKernel\HttpKernel as BaseKernel;
use Symfony\Component\EventDispatcher\EventDispatcher;
 
class Framework extends BaseKernel
{
	public function __construct($routes, $debug = false)
	{
		if ($debug) 
		{
			ini_set('display_errors', 1);
			error_reporting(-1);
		}
		
		$context = new Routing\RequestContext();
		$matcher = new Routing\Matcher\UrlMatcher($routes, $context);
		$resolver = new HttpKernel\Controller\ControllerResolver();
	
		$dispatcher = new EventDispatcher();
		$dispatcher->addSubscriber(new HttpKernel\EventListener\RouterListener($matcher));
		$dispatcher->addSubscriber(new HttpKernel\EventListener\ResponseListener('UTF-8'));
		$dispatcher->addSubscriber(new HttpKernel\EventListener\ExceptionListener('Gecky\\Controller\\ErrorController::exceptionAction'));
	
		parent::__construct($dispatcher, $resolver);
	}
}