<?php

namespace Wiz\ErrorLogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ErrorSetting
 */
class ErrorSetting
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $allowableFrequency;

    /**
     * @var integer
     */
    private $period;

    /**
     * @var \Wiz\ErrorLogBundle\Entity\ErrorType
     */
    private $ErrorTypes;

    /**
     * @var \Wiz\ErrorLogBundle\Entity\Project
     */
    private $Projects;


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
     * Set allowableFrequency
     *
     * @param integer $allowableFrequency
     * @return ErrorSetting
     */
    public function setAllowableFrequency($allowableFrequency)
    {
        $this->allowableFrequency = $allowableFrequency;

        return $this;
    }

    /**
     * Get allowableFrequency
     *
     * @return integer 
     */
    public function getAllowableFrequency()
    {
        return $this->allowableFrequency;
    }

    /**
     * Set period
     *
     * @param integer $period
     * @return ErrorSetting
     */
    public function setPeriod($period)
    {
        $this->period = $period;

        return $this;
    }

    /**
     * Get period
     *
     * @return integer 
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Set ErrorTypes
     *
     * @param \Wiz\ErrorLogBundle\Entity\ErrorType $errorTypes
     * @return ErrorSetting
     */
    public function setErrorTypes(\Wiz\ErrorLogBundle\Entity\ErrorType $errorTypes = null)
    {
        $this->ErrorTypes = $errorTypes;

        return $this;
    }

    /**
     * Get ErrorTypes
     *
     * @return \Wiz\ErrorLogBundle\Entity\ErrorType 
     */
    public function getErrorTypes()
    {
        return $this->ErrorTypes;
    }

    /**
     * Set Projects
     *
     * @param \Wiz\ErrorLogBundle\Entity\Project $projects
     * @return ErrorSetting
     */
    public function setProjects(\Wiz\ErrorLogBundle\Entity\Project $projects = null)
    {
        $this->Projects = $projects;

        return $this;
    }

    /**
     * Get Projects
     *
     * @return \Wiz\ErrorLogBundle\Entity\Project 
     */
    public function getProjects()
    {
        return $this->Projects;
    }
}
