<?php

namespace Projet\LolSearchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Projet\LolSearchBundle\Entity\User;

use Symfony\Component\Security\Core\SecurityContext;


class DefaultController extends Controller
{

    public function indexAction()
    {

    	$request = $this->getRequest();
        $session = $request->getSession();

        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->render('ProjetLolSearchBundle:Default:index.html.twig', array(
            // last username entered by the user
            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            'error' => $error,
        ));


    }
	
	public function contactAction()
	{
		return $this->render('ProjetLolSearchBundle:Default:contact.html.twig');
	}
}
