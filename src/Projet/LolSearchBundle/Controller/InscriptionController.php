<?php

namespace Projet\LolSearchBundle\Controller;

use Projet\LolSearchBundle\Entity\User;
use Projet\LolSearchBundle\Form\UserType;

use Projet\LolSearchBundle\Entity\Event;
use Projet\LolSearchBundle\Form\EventType;

use Projet\LolSearchBundle\Entity\Lieux;
use Projet\LolSearchBundle\Form\LieuxType;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InscriptionController extends Controller
{
	public function registerUserAction()
	{
		$em = $this->getDoctrine()->getManager();
		
		$user = new User();
		
		$form = $this->createForm(new UserType(),$user);
		
		$request = $this->getRequest();
		if ($request->isMethod('POST')){
			$form->bind($request);
			
			$user = $form->getData();
			$em->persist($user);
			$em->flush();
			
			return $this->redirect($this->generateUrl("lolsearch_home"));
		
		}
		
		
		
			
		return $this->render('ProjetLolSearchBundle:Inscription:inscription.html.twig', array('form' => $form->createView()));
	}
	
	public function registerLieuxAction()
	{
		$em = $this->getDoctrine()->getManager();
		
		$lieux = new Lieux();
		
		$form = $this->createForm(new LieuxType(),$lieux);
		
		$request = $this->getRequest();
		if ($request->isMethod('POST')){
			$form->bind($request);
			
			$leiux = $form->getData();
			$em->persist($lieux);
			$em->flush();
			
			return $this->redirect($this->generateUrl("lolsearch_home"));
		
		}
		
		
		
			
		return $this->render('ProjetLolSearchBundle:Inscription:lieux.html.twig', array('form' => $form->createView()));
	}
	
	public function registerEventAction()
	{
		$em = $this->getDoctrine()->getManager();
		
		$event = new Event();
		
		$form = $this->createForm(new EventType(),$event);
		
		$request = $this->getRequest();
		if ($request->isMethod('POST')){
			$form->bind($request);
			
			$leiux = $form->getData();
			$em->persist($event);
			$em->flush();
			
			return $this->redirect($this->generateUrl("lolsearch_home"));
		
		}
		
		
		
			
		return $this->render('ProjetLolSearchBundle:Inscription:event.html.twig', array('form' => $form->createView()));
	}
	


}