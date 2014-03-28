<?php

namespace Projet\LolSearchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Projet\LolSearchBundle\Entity\Event;

class EventController extends Controller
{
    public function ajouterEventAction(Request $request)
    {

    	$event = new Event();
        $form = $this->createFormBuilder($event)
        ->add('Nom',        'text', array('required'=>false,'attr'=>array('class'=>'form-control')))
        ->add('Lieux',    'text', array('required'=>false,'attr'=>array('class'=>'form-control')))
        ->add('Adresse',       'text', array('required'=>false,'attr'=>array('class'=>'form-control')))
        ->add('Mail',    'text', array('required'=>false,'attr'=>array('class'=>'form-control')))
        ->add('debutEvent',     'text', array('required'=>false,'attr'=>array('class'=>'form-control datepicker',)))
        ->add('finEvent',     'text', array('required'=>false,'attr'=>array('class'=>'form-control datepicker')))
		->add('Payant',     'radio', array('required'=>false,'attr'=>array('class'=>'form-control')))
        ->add('Description',     'textarea', array('required'=>false,'attr'=>array('class'=>'form-control')))
        ->getForm();

		$request = $this->getRequest();
		if ($request->getMethod() =="POST"){

			$form->bind($request);
			if($form->isValid()){
				$em = $this->getDoctrine()->getManager();
					
				$em->persist($event);
				$em->flush();
        return $this->redirect($this->generateUrl("lolsearch_home"));
			}
    

	    }

  // On passe la méthode createView() du formulaire à la vue afin qu'elle puisse afficher le formulaire toute seule
  return $this->render('ProjetLolSearchBundle:Event:ajouterEvent.html.twig', array(
    'form' => $form->createView(),
	));
	}

	public function rechercherEventAction(Request $request)
	{

	$event = new Event();
        $form = $this->createFormBuilder($event)
        ->add('Nom',       'text', array('required'=>false,'attr'=>array('class'=>'form-control')))
		->getForm();
		$larecherche=""; 
	
		$form->handleRequest($request);

		if($form->get('Nom')->getData()!="")
         {

               $larecherche = $this->getDoctrine()->getRepository('ProjetLolSearchBundle:Event')->findByNom($form->get('Nom')->getData());
        }

		return $this->render('ProjetLolSearchBundle:Event:rechercherEvent.html.twig', array(
    'form' => $form->createView(),
    'recherche'=>$larecherche));
     }  

     public function voirEventAction(Request $request)
     {

     $larecherche="";
     $larecherche = $this->getDoctrine()->getRepository('ProjetLolSearchBundle:Event')->findAll();
     return $this->render('ProjetLolSearchBundle:Event:voirEvent.html.twig',array(
     	'recherche'=>$larecherche));
     }

}