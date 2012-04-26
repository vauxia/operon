<?php

namespace Operon\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Operon\CoreBundle\Entity\Item
 */
class Item
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var string $itemTable
     */
    private $itemTable;

    /**
     * @var Operon\CoreBundle\Entity\Role
     */
    private $role;

    public function __construct()
    {
        $this->role = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set itemTable
     *
     * @param string $itemTable
     */
    public function setItemTable($itemTable)
    {
        $this->itemTable = $itemTable;
    }

    /**
     * Get itemTable
     *
     * @return string 
     */
    public function getItemTable()
    {
        return $this->itemTable;
    }

    /**
     * Add role
     *
     * @param Operon\CoreBundle\Entity\Role $role
     */
    public function addRole(\Operon\CoreBundle\Entity\Role $role)
    {
        $this->role[] = $role;
    }

    /**
     * Get role
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Create a link to another item.
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function link(Rule $rule, Item $item)
    {
    };
}
