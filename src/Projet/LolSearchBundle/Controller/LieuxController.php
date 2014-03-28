<?php

namespace Projet\LolSearchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Projet\LolSearchBundle\Entity\Lieux;

class LieuxController extends Controller
{
    public function rechercheLieuxAction(Request $request)
    {

    	$lieux = new Lieux();
        $form = $this->createFormBuilder($lieux)
        ->add('Nom',       'text', array('required'=>false,'attr'=>array('class'=>'form-control')))
        ->add('Adresse',     'text', array('required'=>false,'attr'=>array('class'=>'form-control')))
        ->add('Site',       'text', array('required'=>false,'attr'=>array('class'=>'form-control')))
        ->add('Horaire',     'textarea', array('required'=>false,'attr'=>array('class'=>'form-control')))
        ->add('Numero',       'text', array('required'=>false,'attr'=>array('class'=>'form-control')))
        ->add('Description',     'textarea', array('required'=>false,'attr'=>array('class'=>'form-control')))
        ->getForm();

		$request = $this->getRequest();
		if ($request->getMethod() =="POST"){

			$form->bind($request);
			if($form->isValid()){
				$em = $this->getDoctrine()->getManager();
					
				$em->persist($lieux);
				$em->flush();
        return $this->redirect($this->generateUrl("lolsearch_home"));
			}
    

	    }

  // On passe la méthode createView() du formulaire à la vue afin qu'elle puisse afficher le formulaire toute seule
  return $this->render('ProjetLolSearchBundle:Lieux:ajouterLieux.html.twig', array(
    'form' => $form->createView(),
	));
	}

	public function rechercherLieuxAction(Request $request)
	{

	$lieux = new Lieux();
        $form = $this->createFormBuilder($lieux)
        ->add('Nom',       'text', array('required'=>false,'attr'=>array('class'=>'form-control')))
		->getForm();
		$larecherche=""; 
	
		$form->handleRequest($request);

		if($form->get('Nom')->getData()!="")
         {

               $larecherche = $this->getDoctrine()->getRepository('ProjetLolSearchBundle:Lieux')->findByNom($form->get('Nom')->getData());
        }

		return $this->render('ProjetLolSearchBundle:Lieux:rechercherLieux.html.twig', array(
    'form' => $form->createView(),
    'recherche'=>$larecherche));
     }  
}
