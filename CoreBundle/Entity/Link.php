<?php

namespace Operon\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Operon\CoreBundle\Entity\Link
 */
class Link
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
     * @var Operon\CoreBundle\Entity\Rule
     */
    private $rule;

    /**
     * @var Operon\CoreBundle\Entity\Item
     */
    private $itemFrom;

    /**
     * @var Operon\CoreBundle\Entity\Item
     */
    private $itemTo;


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
     * Set itemFrom
     *
     * @param Operon\CoreBundle\Entity\Item $itemFrom
     */
    public function setItemFrom(\Operon\CoreBundle\Entity\Item $itemFrom)
    {
        $this->itemFrom = $itemFrom;
    }

    /**
     * Get itemFrom
     *
     * @return Operon\CoreBundle\Entity\Item 
     */
    public function getItemFrom()
    {
        return $this->itemFrom;
    }

    /**
     * Set itemTo
     *
     * @param Operon\CoreBundle\Entity\Item $itemTo
     */
    public function setItemTo(\Operon\CoreBundle\Entity\Item $itemTo)
    {
        $this->itemTo = $itemTo;
    }

    /**
     * Get itemTo
     *
     * @return Operon\CoreBundle\Entity\Item 
     */
    public function getItemTo()
    {
        return $this->itemTo;
    }
    public function __construct()
    {
        $this->rule = new \Doctrine\Common\Collections\ArrayCollection();
    $this->itemFrom = new \Doctrine\Common\Collections\ArrayCollection();
    $this->itemTo = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add rule
     *
     * @param Operon\CoreBundle\Entity\Rule $rule
     */
    public function addRule(\Operon\CoreBundle\Entity\Rule $rule)
    {
        $this->rule[] = $rule;
    }

    /**
     * Add itemFrom
     *
     * @param Operon\CoreBundle\Entity\Item $itemFrom
     */
    public function addItem(\Operon\CoreBundle\Entity\Item $itemFrom)
    {
        $this->itemFrom[] = $itemFrom;
    }
    /**
     * @var Operon\CoreBundle\Entity\Item
     */
    private $from;

    /**
     * @var Operon\CoreBundle\Entity\Item
     */
    private $to;


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

    /**
     * Validate whether this rule is valid between the entities in question.
     *
     * @return boolean
     */
    function validateRule(ExecutionContext $context)
    {
      if !(isset($this->rule)) {
        $context->addViolation('No rule for this link.', array(), null);
      }

      if !(isset($this->from)) {
        $context->addViolation('This link requires a "from" item.', array(), null);
      }

      if !(isset($this->to)) {
        $context->addViolation('This link requires a "to" item.', array(), null);
      }
    }
}
