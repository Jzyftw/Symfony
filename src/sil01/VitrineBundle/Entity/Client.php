<?php

namespace sil01\VitrineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * Client
 */
class Client extends BaseUser
{
    /**
     * @var integer
     */
    protected $id;

    //constructeur
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

}
