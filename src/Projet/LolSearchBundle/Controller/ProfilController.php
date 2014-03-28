<?php

namespace Projet\LolSearchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProfilController extends Controller
{
    public function showProfilAction()
    {
    	$user = $this->getUser();
    	//var_dump($user);
    	return $this->render('ProjetLolSearchBundle:Profil:showProfil.html.twig');
    }

}
