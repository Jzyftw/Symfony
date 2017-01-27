<?php

namespace sil01\VitrineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneDeCommande
 */
class LigneDeCommande
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $client;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $state;

    /**
     * @var integer
     */
    private $article;

    /**
     * @var integer 
     */
    private $commande;

    /**
     * @var integer
     */
    private $number;

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
     * Set client
     *
     * @param string $client
     * @return LigneDeCommande
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return string 
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return LigneDeCommande
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return LigneDeCommande
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set article
     *
     * @param \sil01\VitrineBundle\Entity\Article $article
     * @return LigneDeCommande
     */
    public function setArticle($article)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \sil01\VitrineBundle\Entity\Article 
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Set commande
     *
     * @param integer $commande
     * @return LigneDeCommande
     */
    public function setCommande($commande)
    {
        $this->commande = $commande;

        return $this;
    }

    /**
     * Get commande
     *
     * @return \sil01\VitrineBundle\Entity\Commande 
     */
    public function getCommande()
    {
        return $this->commande;
    }
    


    /**
     * Set number
     *
     * @param integer $number
     * @return LigneDeCommande
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer 
     */
    public function getNumber()
    {
        return $this->number;
    }
}
