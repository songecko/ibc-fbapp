<?php

namespace Ibc\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Templating\PhpEngine;
use Symfony\Component\Templating\TemplateNameParser;
use Symfony\Component\Templating\Loader\FilesystemLoader;
use Gecky\Controller\Controller;

class MainController extends Controller
{		
	public function indexAction(Request $request)
	{
		return $this->render('Main/index.php');
	}
	
	public function likeAction(Request $request)
	{
		return $this->render('Main/like.php');
	} 
	
	protected function getViewsDir()
	{
		return __DIR__.'/../Resources/views/%name%';
	}
}