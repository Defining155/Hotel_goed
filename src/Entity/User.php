<?php
// src/Entity/User.php

namespace App\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Organisatie", inversedBy="user")
     */
    private $organisatie;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    public function getOrganisatie(): ?Organisatie
    {
        return $this->organisatie;
    }

    public function setOrganisatie(?Organisatie $organisatie): self
    {
        $this->organisatie = $organisatie;

        return $this;
    }
}