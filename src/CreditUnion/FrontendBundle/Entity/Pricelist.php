<?php

namespace CreditUnion\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CreditUnion\FrontendBundle\Entity\Pricelist
 *
 * @ORM\Table(name="pricelist")
 * @ORM\Entity
 */
class Pricelist
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $type
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var float $nterestrate
     *
     * @ORM\Column(name="nterestRate", type="float", nullable=false)
     */
    private $nterestrate;

    /**
     * @var integer $forthedate
     *
     * @ORM\Column(name="forTheDate", type="integer", nullable=true)
     */
    private $forthedate;
    
    /**
     * @var string $type
     *
     * @ORM\Column(name="creditUnionID", type="integer", nullable=true)
     */
    private $creditunionid;
    

    /**
     * @var Creditunions
     *
     * @ORM\ManyToOne(targetEntity="Creditunions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="creditUnionID", referencedColumnName="id")
     * })
     */
    private $creditunion;



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
     * Set type
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set nterestrate
     *
     * @param float $nterestrate
     */
    public function setNterestrate($nterestrate)
    {
        $this->nterestrate = $nterestrate;
    }

    /**
     * Get nterestrate
     *
     * @return float 
     */
    public function getNterestrate()
    {
        return $this->nterestrate;
    }

    /**
     * Set forthedate
     *
     * @param integer $forthedate
     */
    public function setForthedate($forthedate)
    {
        $this->forthedate = $forthedate;
    }

    /**
     * Get forthedate
     *
     * @return integer 
     */
    public function getForthedate()
    {
        return $this->forthedate;
    }
    
    /**
     * Set creditunionid
     *
     * @param integer
     *
     */
    public function setCreditunionid($creditunionid)
    {
    	$this->creditunionid = $creditunionid;
    }
    
    /**
     * Get creditunionid
     *
     * @return integer
     *
     */
    public function getCreditunionid()
    {
    	return $this->creditunionid;
    }

    /**
     * Set creditunion
     *
     * @param CreditUnion\FrontendBundle\Entity\Creditunions $creditunion
     * 
     */
    public function setCreditunion($creditunion)
    {
        $this->creditunion = $creditunion;
    }

    /**
     * Get creditunionid
     *
     * @return CreditUnion\FrontendBundle\Entity\Creditunions 
     * 
     */
    public function getCreditunion()
    {
        return $this->creditunion;
    }        
}