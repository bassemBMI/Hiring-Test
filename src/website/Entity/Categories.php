<?php

namespace SSENSE\HiringTest\Entity;


/**
 * @Entity
 * @Table(name="categories")
 * 
 */
class Categories
{
    /**
     * @var integer
     * @Id @Column(name="id", type="integer")
     * @GeneratedValue
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="name", type="text", nullable=false)
     */
    private $name;
    
    /**
     * @var SSENSE\HiringTest\Entity\Categories
     *
     * @ManyToOne(targetEntity="SSENSE\HiringTest\Entity\Categories")
     * @JoinColumns({
     *   @JoinColumn(name="parent_id", referencedColumnName="id")
     * })
     */
    private $parent;
    
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
     * @return Categories
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
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
     * Set parent
     *
     * @param SSENSE\HiringTest\Entity\Categories $parent
     * @return Categories
     */
    public function setParent(\SSENSE\HiringTest\Entity\Categories $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return SSENSE\HiringTest\Entity\Categories
     */
    public function getParent()
    {
        return $this->parent;
    }
    
}