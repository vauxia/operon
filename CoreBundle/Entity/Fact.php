<?php

namespace Operon\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Operon\CoreBundle\Entity\Fact
 */
class Fact
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var datetime $timestamp
     */
    private $timestamp;

    /**
     * @var Operon\CoreBundle\Entity\Rule
     */
    private $rule;

    /**
     * @var Operon\CoreBundle\Entity\Link
     */
    private $link;


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
     * Set timestamp
     *
     * @param datetime $timestamp
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    }

    /**
     * Get timestamp
     *
     * @return datetime 
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set rule
     *
     * @param Operon\CoreBundle\Entity\Rule $rule
     */
    public function setRule(\Operon\CoreBundle\Entity\Rule $rule)
    {
        $this->rule = $rule;
    }

    /**
     * Get rule
     *
     * @return Operon\CoreBundle\Entity\Rule 
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * Set link
     *
     * @param Operon\CoreBundle\Entity\Link $link
     */
    public function setLink(\Operon\CoreBundle\Entity\Link $link)
    {
        $this->link = $link;
    }

    /**
     * Get link
     *
     * @return Operon\CoreBundle\Entity\Link 
     */
    public function getLink()
    {
        return $this->link;
    }
}