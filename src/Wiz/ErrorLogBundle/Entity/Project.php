<?php

namespace Wiz\ErrorLogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 */
class Project
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $Owners;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Owners = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * Set Name
     *
     * @param string $name
     * @return Project
     */
    public function setName($name)
    {
        $this->Name = $name;

        return $this;
    }

    /**
     * Get Name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Add Owners
     *
     * @param \Wiz\ErrorLogBundle\Entity\Owner $owners
     * @return Project
     */
    public function addOwner(\Wiz\ErrorLogBundle\Entity\Owner $owners)
    {
        $this->Owners[] = $owners;

        return $this;
    }

    /**
     * Remove Owners
     *
     * @param \Wiz\ErrorLogBundle\Entity\Owner $owners
     */
    public function removeOwner(\Wiz\ErrorLogBundle\Entity\Owner $owners)
    {
        $this->Owners->removeElement($owners);
    }

    /**
     * Get Owners
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOwners()
    {
        return $this->Owners;
    }
}
