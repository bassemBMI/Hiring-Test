<?php

namespace SSENSE\HiringTest\Entity;


/**
 * @Entity
 * @Table(name="products")
 * 
 */
class Products
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
     *   @JoinColumn(name="category_id", referencedColumnName="id")
     * })
     */
    private $category;
    
    /**
     * @OneToOne(targetEntity="SSENSE\HiringTest\Entity\Stocks", mappedBy="product")
     */
    private $stock;
    
    /**
     * @OneToMany(targetEntity="SSENSE\HiringTest\Entity\Prices", mappedBy="product")
     */
    private $price;

    
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
     * Set category
     *
     * @param SSENSE\HiringTest\Entity\Categories $category
     * @return Categories
     */
    public function setParent(\SSENSE\HiringTest\Entity\Categories $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return SSENSE\HiringTest\Entity\Categories
     */
    public function getCategory()
    {
        return $this->category;
    }
    
    /**
     * Set stock
     *
     * @param SSENSE\HiringTest\Entity\Stocks $stock
     * @return Stocks
     */
    public function setStock(\SSENSE\HiringTest\Entity\Stocks $stock = null)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return SSENSE\HiringTest\Entity\Stocks
     */
    public function getStock()
    {
        return $this->stock;
    }
    
    /**
     * Set price
     *
     * @param SSENSE\HiringTest\Entity\Prices $price
     * @return Prices
     */
    public function setPrice(\SSENSE\HiringTest\Entity\Prices $price = null)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return SSENSE\HiringTest\Entity\Prices
     */
    public function getPrice()
    {
        return $this->price;
    }
    
}