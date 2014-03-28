<?php

namespace Projet\LolSearchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Projet\LolSearchBundle\Entity\EventRepository")
 */
class Event
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="lieux", type="string", length=150)
     */
    private $lieux;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=150)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=100)
     */
    private $mail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="debutEvent", type="datetime")
     */
    private $debutEvent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="finEvent", type="datetime")
     */
    private $finEvent;

    /**
     * @var boolean
     *
     * @ORM\Column(name="payant", type="boolean")
     */
    private $payant;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Event
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set lieux
     *
     * @param string $lieux
     * @return Event
     */
    public function setLieux($lieux)
    {
        $this->lieux = $lieux;

        return $this;
    }

    /**
     * Get lieux
     *
     * @return string 
     */
    public function getLieux()
    {
        return $this->lieux;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Event
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Event
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set debutEvent
     *
     * @param \DateTime $debutEvent
     * @return Event
     */
    public function setDebutEvent($debutEvent)
    {
        $this->debutEvent = $debutEvent;

        return $this;
    }

    /**
     * Get debutEvent
     *
     * @return \DateTime 
     */
    public function getDebutEvent()
    {
        return $this->debutEvent;
    }

    /**
     * Set finEvent
     *
     * @param \DateTime $finEvent
     * @return Event
     */
    public function setFinEvent($finEvent)
    {
        $this->finEvent = $finEvent;

        return $this;
    }

    /**
     * Get finEvent
     *
     * @return \DateTime 
     */
    public function getFinEvent()
    {
        return $this->finEvent;
    }

    /**
     * Set payant
     *
     * @param boolean $payant
     * @return Event
     */
    public function setPayant($payant)
    {
        $this->payant = $payant;

        return $this;
    }

    /**
     * Get payant
     *
     * @return boolean 
     */
    public function getPayant()
    {
        return $this->payant;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Event
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
}
