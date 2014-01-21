<?php

require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();
$routes = include __DIR__.'/config/routes.php';

$debug = false;
$framework = new Gecky\Framework($routes, $debug);

$framework->handle($request)->send();