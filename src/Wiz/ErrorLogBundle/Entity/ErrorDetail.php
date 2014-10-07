<?php

namespace Wiz\ErrorLogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ErrorDetail
 */
class ErrorDetail
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $occurredTime;

    /**
     * @var string
     */
    private $message;

    /**
     * @var string
     */
    private $stackTrace;

    /**
     * @var array
     */
    private $status;

    /**
     * @var \Wiz\ErrorLogBundle\Entity\Project
     */
    private $Projects;

    /**
     * @var \Wiz\ErrorLogBundle\Entity\ErrorType
     */
    private $ErrorTypes;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $MailLogs;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->MailLogs = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set occurredTime
     *
     * @param \DateTime $occurredTime
     * @return ErrorDetail
     */
    public function setOccurredTime($occurredTime)
    {
        $this->occurredTime = $occurredTime;

        return $this;
    }

    /**
     * Get occurredTime
     *
     * @return \DateTime 
     */
    public function getOccurredTime()
    {
        return $this->occurredTime;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return ErrorDetail
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set stackTrace
     *
     * @param string $stackTrace
     * @return ErrorDetail
     */
    public function setStackTrace($stackTrace)
    {
        $this->stackTrace = $stackTrace;

        return $this;
    }

    /**
     * Get stackTrace
     *
     * @return string 
     */
    public function getStackTrace()
    {
        return $this->stackTrace;
    }

    /**
     * Set status
     *
     * @param array $status
     * @return ErrorDetail
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return array 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set Projects
     *
     * @param \Wiz\ErrorLogBundle\Entity\Project $projects
     * @return ErrorDetail
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

    /**
     * Set ErrorTypes
     *
     * @param \Wiz\ErrorLogBundle\Entity\ErrorType $errorTypes
     * @return ErrorDetail
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
     * Add MailLogs
     *
     * @param \Wiz\ErrorLogBundle\Entity\MailLog $mailLogs
     * @return ErrorDetail
     */
    public function addMailLog(\Wiz\ErrorLogBundle\Entity\MailLog $mailLogs)
    {
        $this->MailLogs[] = $mailLogs;

        return $this;
    }

    /**
     * Remove MailLogs
     *
     * @param \Wiz\ErrorLogBundle\Entity\MailLog $mailLogs
     */
    public function removeMailLog(\Wiz\ErrorLogBundle\Entity\MailLog $mailLogs)
    {
        $this->MailLogs->removeElement($mailLogs);
    }

    /**
     * Get MailLogs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMailLogs()
    {
        return $this->MailLogs;
    }
}
