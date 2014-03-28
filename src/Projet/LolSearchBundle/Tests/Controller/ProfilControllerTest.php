<?php

namespace Projet\LolSearchBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProfilControllerTest extends WebTestCase
{
    public function testShowprofil()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/profil');
    }

}
