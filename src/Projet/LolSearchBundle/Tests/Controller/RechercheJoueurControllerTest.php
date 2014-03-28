<?php

namespace Projet\LolSearchBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RechercheJoueurControllerTest extends WebTestCase
{
    public function testRecherche()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/recherche');
    }

}
