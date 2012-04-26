<?php

namespace Operon\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Operon\CoreBundle\Entity\LinkHistory
 */
class LinkHistory
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var datetime $linkStart
     */
    private $linkStart;

    /**
     * @var datetime $linkEnd
     */
    private $linkEnd;


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
     * Set linkStart
     *
     * @param datetime $linkStart
     */
    public function setLinkStart($linkStart)
    {
        $this->linkStart = $linkStart;
    }

    /**
     * Get linkStart
     *
     * @return datetime 
     */
    public function getLinkStart()
    {
        return $this->linkStart;
    }

    /**
     * Set linkEnd
     *
     * @param datetime $linkEnd
     */
    public function setLinkEnd($linkEnd)
    {
        $this->linkEnd = $linkEnd;
    }

    /**
     * Get linkEnd
     *
     * @return datetime 
     */
    public function getLinkEnd()
    {
        return $this->linkEnd;
    }

    /**
     * Set id
     *
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     * @var Operon\CoreBundle\Entity\Rule
     */
    private $rule;

    /**
     * @var Operon\CoreBundle\Entity\Item
     */
    private $from;

    /**
     * @var Operon\CoreBundle\Entity\Item
     */
    private $to;


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
     * Set from
     *
     * @param Operon\CoreBundle\Entity\Item $from
     */
    public function setFrom(\Operon\CoreBundle\Entity\Item $from)
    {
        $this->from = $from;
    }

    /**
     * Get from
     *
     * @return Operon\CoreBundle\Entity\Item 
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Set to
     *
     * @param Operon\CoreBundle\Entity\Item $to
     */
    public function setTo(\Operon\CoreBundle\Entity\Item $to)
    {
        $this->to = $to;
    }

    /**
     * Get to
     *
     * @return Operon\CoreBundle\Entity\Item 
     */
    public function getTo()
    {
        return $this->to;
    }
}