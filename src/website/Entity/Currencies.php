<?php

namespace SSENSE\HiringTest\Entity;


/**
 * @Entity
 * @Table(name="currencies")
 * 
 */
class Currencies
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
     * @Column(name="code", type="text", nullable=false)
     */
    private $code;
    
    /**
     * @var string
     *
     * @Column(name="format", type="text", nullable=true)
     */
    private $format;
    
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
     * Set code
     *
     * @param string $code
     * @return Currencies
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
     * Set format
     *
     * @param string $format
     * @return Currencies
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Get format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }
    
}