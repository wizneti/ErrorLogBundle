<?php

namespace Wiz\ErrorLogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Owner
 */
class Owner
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
     * @var string
     */
    private $Mail;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $Projects;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Projects = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Owner
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
     * Set Mail
     *
     * @param string $mail
     * @return Owner
     */
    public function setMail($mail)
    {
        $this->Mail = $mail;

        return $this;
    }

    /**
     * Get Mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->Mail;
    }

    /**
     * Add Projects
     *
     * @param \Wiz\ErrorLogBundle\Entity\Project $projects
     * @return Owner
     */
    public function addProject(\Wiz\ErrorLogBundle\Entity\Project $projects)
    {
        $this->Projects[] = $projects;

        return $this;
    }

    /**
     * Remove Projects
     *
     * @param \Wiz\ErrorLogBundle\Entity\Project $projects
     */
    public function removeProject(\Wiz\ErrorLogBundle\Entity\Project $projects)
    {
        $this->Projects->removeElement($projects);
    }

    /**
     * Get Projects
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProjects()
    {
        return $this->Projects;
    }
}
