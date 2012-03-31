<?php

namespace CreditUnion\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CreditUnion\FrontendBundle\Entity\Creditunions
 *
 * @ORM\Table(name="creditunions")
 * @ORM\Entity
 */
class Creditunions
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
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var integer $edrpou
     *
     * @ORM\Column(name="EDRPOU", type="integer", nullable=false)
     */
    private $edrpou;
   

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
     * Set edrpou
     *
     * @param integer $edrpou
     */
    public function setEdrpou($edrpou)
    {
        $this->edrpou = $edrpou;
    }

    /**
     * Get edrpou
     *
     * @return integer 
     */
    public function getEdrpou()
    {
        return $this->edrpou;
    }
}