<?php

namespace SSENSE\HiringTest\Entity;


/**
 * @Entity
 * @Table(name="stocks")
 * 
 */
class Stocks
{
    /**
     * @var integer
     * @Id @Column(name="id", type="integer")
     * @GeneratedValue
     */
    private $id;

    /**
     * @var integer
     *
     * @Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;
    
    /**
     * @var SSENSE\HiringTest\Entity\Products
     *
     * @OneToOne(targetEntity="SSENSE\HiringTest\Entity\Products", inversedBy="stock")
     * @JoinColumns({
     *   @JoinColumn(name="product_id", referencedColumnName="id")
     * })
     */
    private $product;
    
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
     * Set quantity
     *
     * @param integer $quantity
     * @return Stocks
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
    
    /**
     * Set product
     *
     * @param SSENSE\HiringTest\Entity\Products $product
     * @return Stocks
     */
    public function setParent(\SSENSE\HiringTest\Entity\Products $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return SSENSE\HiringTest\Entity\Products
     */
    public function getProduct()
    {
        return $this->product;
    }
    
}