<?php

require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;

$routes = include __DIR__.'/config/routes.php';
$sc = include __DIR__.'/config/container.php';
$sc->setParameter('debug', false);

$request = Request::createFromGlobals();
$sc->get('gecky.framework')->handle($request)->send();