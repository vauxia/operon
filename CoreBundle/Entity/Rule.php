<?php

namespace Operon\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Operon\CoreBundle\Entity\Rule
 */
class Rule
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
     * @var string $name
     */
    private $name;

    /**
     * @var boolean $active
     */
    private $active;

    /**
     * @var boolean $permanent
     */
    private $permanent;

    /**
     * @var boolean $symmetrical
     */
    private $symmetrical;

    /**
     * @var integer $minimumFromCount
     */
    private $minimumFromCount;

    /**
     * @var integer $maximumFromCount
     */
    private $maximumFromCount;

    /**
     * @var integer $minimumToCount
     */
    private $minimumToCount;

    /**
     * @var integer $maximumToCount
     */
    private $maximumToCount;


    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set active
     *
     * @param boolean $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set permanent
     *
     * @param boolean $permanent
     */
    public function setPermanent($permanent)
    {
        $this->permanent = $permanent;
    }

    /**
     * Get permanent
     *
     * @return boolean 
     */
    public function getPermanent()
    {
        return $this->permanent;
    }

    /**
     * Set symmetrical
     *
     * @param boolean $symmetrical
     */
    public function setSymmetrical($symmetrical)
    {
        $this->symmetrical = $symmetrical;
    }

    /**
     * Get symmetrical
     *
     * @return boolean 
     */
    public function getSymmetrical()
    {
        return $this->symmetrical;
    }

    /**
     * Set minimumFromCount
     *
     * @param integer $minimumFromCount
     */
    public function setMinimumFromCount($minimumFromCount)
    {
        $this->minimumFromCount = $minimumFromCount;
    }

    /**
     * Get minimumFromCount
     *
     * @return integer 
     */
    public function getMinimumFromCount()
    {
        return $this->minimumFromCount;
    }

    /**
     * Set maximumFromCount
     *
     * @param integer $maximumFromCount
     */
    public function setMaximumFromCount($maximumFromCount)
    {
        $this->maximumFromCount = $maximumFromCount;
    }

    /**
     * Get maximumFromCount
     *
     * @return integer 
     */
    public function getMaximumFromCount()
    {
        return $this->maximumFromCount;
    }

    /**
     * Set minimumToCount
     *
     * @param integer $minimumToCount
     */
    public function setMinimumToCount($minimumToCount)
    {
        $this->minimumToCount = $minimumToCount;
    }

    /**
     * Get minimumToCount
     *
     * @return integer 
     */
    public function getMinimumToCount()
    {
        return $this->minimumToCount;
    }

    /**
     * Set maximumToCount
     *
     * @param integer $maximumToCount
     */
    public function setMaximumToCount($maximumToCount)
    {
        $this->maximumToCount = $maximumToCount;
    }

    /**
     * Get maximumToCount
     *
     * @return integer 
     */
    public function getMaximumToCount()
    {
        return $this->maximumToCount;
    }
    /**
     * @var Operon\CoreBundle\Entity\Role
     */
    private $fromRole;

    /**
     * @var Operon\CoreBundle\Entity\Role
     */
    private $toRole;


    /**
     * Set fromRole
     *
     * @param Operon\CoreBundle\Entity\Role $fromRole
     */
    public function setFromRole(\Operon\CoreBundle\Entity\Role $fromRole)
    {
        $this->fromRole = $fromRole;
    }

    /**
     * Get fromRole
     *
     * @return Operon\CoreBundle\Entity\Role 
     */
    public function getFromRole()
    {
        return $this->fromRole;
    }

    /**
     * Set toRole
     *
     * @param Operon\CoreBundle\Entity\Role $toRole
     */
    public function setToRole(\Operon\CoreBundle\Entity\Role $toRole)
    {
        $this->toRole = $toRole;
    }

    /**
     * Get toRole
     *
     * @return Operon\CoreBundle\Entity\Role 
     */
    public function getToRole()
    {
        return $this->toRole;
    }
    /**
     * @var Operon\CoreBundle\Entity\Link
     */
    private $links;

    public function __construct()
    {
        $this->fromRole = new \Doctrine\Common\Collections\ArrayCollection();
    $this->toRole = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add fromRole
     *
     * @param Operon\CoreBundle\Entity\Role $fromRole
     */
    public function addRole(\Operon\CoreBundle\Entity\Role $fromRole)
    {
        $this->fromRole[] = $fromRole;
    }

    /**
     * Set links
     *
     * @param Operon\CoreBundle\Entity\Link $links
     */
    public function setLinks(\Operon\CoreBundle\Entity\Link $links)
    {
        $this->links = $links;
    }

    /**
     * Get links
     *
     * @return Operon\CoreBundle\Entity\Link 
     */
    public function getLinks()
    {
        return $this->links;
    }
    /**
     * @var Operon\CoreBundle\Entity\Item
     */
    private $owner;


    /**
     * Set owner
     *
     * @param Operon\CoreBundle\Entity\Item $owner
     */
    public function setOwner(\Operon\CoreBundle\Entity\Item $owner)
    {
        $this->owner = $owner;
    }

    /**
     * Get owner
     *
     * @return Operon\CoreBundle\Entity\Item 
     */
    public function getOwner()
    {
        return $this->owner;
    }
}