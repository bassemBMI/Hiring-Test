<?php

namespace SSENSE\HiringTest\Entity;


/**
 * @Entity
 * @Table(name="prices")
 * 
 */
class Prices
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
     * @Column(name="price", type="decimal", precision=2, nullable=false)
     */
    private $price;
    
    /**
     * @var SSENSE\HiringTest\Entity\Products
     *
     * @ManyToOne(targetEntity="SSENSE\HiringTest\Entity\Products", inversedBy="price")
     * @JoinColumns({
     *   @JoinColumn(name="product_id", referencedColumnName="id")
     * })
     */
    private $product;
    
    /**
     * @var SSENSE\HiringTest\Entity\Countries
     *
     * @ManyToOne(targetEntity="SSENSE\HiringTest\Entity\Countries")
     * @JoinColumns({
     *   @JoinColumn(name="country_id", referencedColumnName="id")
     * })
     */
    private $country;
    
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
     * Set price
     *
     * @param integer $price
     * @return Prices
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer
     */
    public function getPrice()
    {
        return $this->price;
    }
    
    /**
     * Set product
     *
     * @param SSENSE\HiringTest\Entity\Products $product
     * @return Prices
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
    
    /**
     * Set country
     *
     * @param SSENSE\HiringTest\Entity\Countries $country
     * @return Prices
     */
    public function setCountry(\SSENSE\HiringTest\Entity\Countries $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return SSENSE\HiringTest\Entity\Countries
     */
    public function getCountry()
    {
        return $this->country;
    }
    
}