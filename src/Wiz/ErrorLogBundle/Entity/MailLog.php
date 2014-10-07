<?php

namespace Wiz\ErrorLogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MailLog
 */
class MailLog
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ErrorDetails;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ErrorDetails = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return MailLog
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
     * Add ErrorDetails
     *
     * @param \Wiz\ErrorLogBundle\Entity\ErrorDetail $errorDetails
     * @return MailLog
     */
    public function addErrorDetail(\Wiz\ErrorLogBundle\Entity\ErrorDetail $errorDetails)
    {
        $this->ErrorDetails[] = $errorDetails;

        return $this;
    }

    /**
     * Remove ErrorDetails
     *
     * @param \Wiz\ErrorLogBundle\Entity\ErrorDetail $errorDetails
     */
    public function removeErrorDetail(\Wiz\ErrorLogBundle\Entity\ErrorDetail $errorDetails)
    {
        $this->ErrorDetails->removeElement($errorDetails);
    }

    /**
     * Get ErrorDetails
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getErrorDetails()
    {
        return $this->ErrorDetails;
    }
}
