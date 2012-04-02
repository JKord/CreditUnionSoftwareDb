<?php

namespace CreditUnion\FrontendBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class WelcomeController extends Controller
{
	/**
	 * @Route("/")	
	 */
    public function indexAction()
    {
    	// return new Response("<h1>Welcome");
        return $this->render('CreditUnionFrontendBundle:pages:index.html.twig');      
    }
}
