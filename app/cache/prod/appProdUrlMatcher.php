<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // lolsearch_home
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'Projet\\LolSearchBundle\\Controller\\DefaultController::indexAction',  '_route' => 'lolsearch_home',);
        }

        // lolsearch_contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'Projet\\LolSearchBundle\\Controller\\DefaultController::contactAction',  '_route' => 'lolsearch_contact',);
        }

        if (0 === strpos($pathinfo, '/inscription')) {
            // lolsearch_inscription
            if ($pathinfo === '/inscription/utilisateur') {
                return array (  '_controller' => 'Projet\\LolSearchBundle\\Controller\\InscriptionController::registerUserAction',  '_route' => 'lolsearch_inscription',);
            }

            // lolsearch_lieux
            if ($pathinfo === '/inscription/lieux') {
                return array (  '_controller' => 'Projet\\LolSearchBundle\\Controller\\InscriptionController::registerLieuxAction',  '_route' => 'lolsearch_lieux',);
            }

            // lolsearch_event
            if ($pathinfo === '/inscription/event') {
                return array (  '_controller' => 'Projet\\LolSearchBundle\\Controller\\InscriptionController::registerEventAction',  '_route' => 'lolsearch_event',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        // lolsearch_recherche
        if ($pathinfo === '/recherche') {
            return array (  '_controller' => 'Projet\\LolSearchBundle\\Controller\\JoueurController::rechercheAction',  '_route' => 'lolsearch_recherche',);
        }

        // lolsearch_profil
        if ($pathinfo === '/profil') {
            return array (  '_controller' => 'Projet\\LolSearchBundle\\Controller\\ProfilController::showProfilAction',  '_route' => 'lolsearch_profil',);
        }

        // lolsearch_ajouterLieux
        if ($pathinfo === '/ajouterLieux') {
            return array (  '_controller' => 'Projet\\LolSearchBundle\\Controller\\LieuxController::rechercheLieuxAction',  '_route' => 'lolsearch_ajouterLieux',);
        }

        // lolsearch_rechercherLieux
        if ($pathinfo === '/rechercherLieux') {
            return array (  '_controller' => 'Projet\\LolSearchBundle\\Controller\\LieuxController::rechercherLieuxAction',  '_route' => 'lolsearch_rechercherLieux',);
        }

        // lolsearch_ajouterEvent
        if ($pathinfo === '/ajouterEvent') {
            return array (  '_controller' => 'Projet\\LolSearchBundle\\Controller\\EventController::ajouterEventAction',  '_route' => 'lolsearch_ajouterEvent',);
        }

        // lolsearch_rechercherEvent
        if ($pathinfo === '/rechercherEvent') {
            return array (  '_controller' => 'Projet\\LolSearchBundle\\Controller\\EventController::rechercherEventAction',  '_route' => 'lolsearch_rechercherEvent',);
        }

        // lolsearch_voirEvent
        if ($pathinfo === '/voirEvent') {
            return array (  '_controller' => 'Projet\\LolSearchBundle\\Controller\\EventController::voirEventAction',  '_route' => 'lolsearch_voirEvent',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
