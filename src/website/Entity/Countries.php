<?php

namespace SSENSE\HiringTest\Entity;


/**
 * @Entity
 * @Table(name="countries")
 * 
 */
class Countries
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
     * @var string
     *
     * @Column(name="code", type="text", nullable=false)
     */
    private $code;
    
    /**
     * @var SSENSE\HiringTest\Entity\Currencies
     *
     * @ManyToOne(targetEntity="SSENSE\HiringTest\Entity\Currencies")
     * @JoinColumns({
     *   @JoinColumn(name="currency_id", referencedColumnName="id")
     * })
     */
    private $currency;
    
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
     * @return Countries
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
     * Set code
     *
     * @param string $code
     * @return Countries
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }
    
    /**
     * Set currency
     *
     * @param SSENSE\HiringTest\Entity\Currencies $currency
     * @return Countries
     */
    public function setCurrency(\SSENSE\HiringTest\Entity\Currencies $currency = null)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return SSENSE\HiringTest\Entity\Currencies
     */
    public function getCurrency()
    {
        return $this->currency;
    }
    
}