<?php

namespace sil01\VitrineBundle\Entity;


/**
 * Commande
 */
class Commande
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
     * @var boolean
     */
    private $state;


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
     * @return Commande
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
     * @return Commande
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
     * @param boolean $state
     * @return Commande
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return boolean 
     */
    public function getState()
    {
        return $this->state;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ligneDeCommandes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ligneDeCommandes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ligneDeCommandes
     *
     * @param \sil01\VitrineBundle\Entity\LigneDeCommande $ligneDeCommandes
     * @return Commande
     */
    public function addLigneDeCommande(\sil01\VitrineBundle\Entity\LigneDeCommande $ligneDeCommandes)
    {
        $this->ligneDeCommandes[] = $ligneDeCommandes;

        return $this;
    }

    /**
     * Remove ligneDeCommandes
     *
     * @param \sil01\VitrineBundle\Entity\LigneDeCommande $ligneDeCommandes
     */
    public function removeLigneDeCommande(\sil01\VitrineBundle\Entity\LigneDeCommande $ligneDeCommandes)
    {
        $this->ligneDeCommandes->removeElement($ligneDeCommandes);
    }

    /**
     * Get ligneDeCommandes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLigneDeCommandes()
    {
        return $this->ligneDeCommandes;
    }
}
