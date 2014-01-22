<?php

namespace Ibc\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Templating\PhpEngine;
use Symfony\Component\Templating\TemplateNameParser;
use Symfony\Component\Templating\Loader\FilesystemLoader;
use Gecky\Controller\Controller;

class MainController extends Controller
{		
	public function indexAction(Request $request)
	{
		$facebook = $this->container->get('facebook');
		$signedRequest = $facebook->getSignedRequest();
		$loginUrl = $facebook->getConfiguredLoginUrl();
		
		$mobileDetect = $this->container->get('mobile_detect');		
		$isMobile = $mobileDetect->isMobile();
		
		if (!$isMobile && $signedRequest == null)
		{
			return new RedirectResponse($facebook->getTabUrl());
		}
				
		if($signedRequest && !$signedRequest['page']['liked'])
		{
			//return RedirectResponse('like');
		}
		
		return $this->render('Main/index.php', array(				
			'facebook' => $facebook,
			'isMobile' => $isMobile,
			'loginUrl' => $loginUrl
		));
	}
	
	public function likeAction(Request $request)
	{
		return $this->render('Main/like.php');
	} 
	
	public function registerAction(Request $request)
	{
		$response = array();
		
		//Register to DB
		$register = $request->get('register');
		$name = $register['name'];
		$lastname = $register['lastname'];
		$phone = $register['phone'];
		$email = $register['email'];
		$recinto = $register['recinto'];
		$programa = $register['programa'];
		$anio = $register['anio'];
		$newsletter = (isset($register['newsletter']) && $register['newsletter']!='')?1:0;
		
		//Guardado en base de datos
		$query = 'INSERT INTO user(name, lastname, phone, email, recinto, programa, anio, newsletter) 
				VALUES ("'.$name.'", "'.$lastname.'","'.$phone.'","'.$email.'","'.$recinto.'","'.$programa.'","'.$anio.'","'.$newsletter.'")';
		$response['register_saved'] = $this->container->get('database')->execute($query);
		
		$facebook = $this->container->get('facebook');
		if($facebook->getUser())
		{
			try {
				$ret_obj = $facebook->api('/me/feed', 'POST',
						array(
								'link' => $facebook->getAppHost(),
								'message' => 'Estoy participando en la promoción de IBC. Visita: '.$facebook->getAppHost().'.'
						)
				);
				$response['fb_post'] = true;
			} catch(FacebookApiException $e)
			{
				$response['fb_post'] = false;
				$response['fb_post_error'] = array(
						'type' => $e->getType(),
						'message' => $e->getMessage()
				);
			}
		}
		
		return new Response(json_encode($response));
	}
	
	protected function getViewsDir()
	{
		return __DIR__.'/../Resources/views/%name%';
	}
}