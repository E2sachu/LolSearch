<?php

namespace Projet\LolSearchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class JoueurController extends Controller
{
    public function rechercheAction(Request $request)
    {

     // On crée un objet Article
      $larecherche="";
  // On crée le FormBuilder grâce à la méthode du contrôleur
        $formBuilder = $this->createFormBuilder()

  // On ajoute les champs de l'entité que l'on veut à notre formulaire
         ->add('Pseudo',       'text', array('required'=>false,'attr'=>array('class'=>'form-control')))
        ->add('Classement',     'text', array('required'=>false,'attr'=>array('class'=>'form-control')));
  // Pour l'instant, pas de commentaires, catégories, etc., on les gérera plus tard

  // À partir du formBuilder, on génère le formulaire
      $form = $formBuilder->getForm();

      $form->handleRequest($request);

      if($form->isValid()){

    

         if($form->get('Pseudo')->getData()!="")
         {

               $larecherche = $this->getDoctrine()->getRepository('ProjetLolSearchBundle:User')->findByPseudo($form->get('Pseudo')->getData());
        }
        elseif ($form->get('Classement')->getData()!=""){

               $larecherche = $this->getDoctrine()->getRepository('ProjetLolSearchBundle:User')->findByRang($form->get('Classement')->getData());
   
       }

     }

  // On passe la méthode createView() du formulaire à la vue afin qu'elle puisse afficher le formulaire toute seule
  return $this->render('ProjetLolSearchBundle:Joueur:rechercheJoueur.html.twig', array(
    'form' => $form->createView(),
    'recherche'=>$larecherche));

}
public function ficheAction($id)
    {
       $ficheJoueur = $this->getDoctrine()->getRepository('ProjetLolSearchBundle:User')->find($id);

       return $this->render('ProjetLolSearchBundle:Joueur:fiche.html.twig', array('ficheJoueur'=> $ficheJoueur));
    }
}
