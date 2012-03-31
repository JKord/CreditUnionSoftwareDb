<?php

namespace CreditUnion\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CreditUnion\FrontendBundle\Entity\Worker
 *
 * @ORM\Table(name="worker")
 * @ORM\Entity
 */
class Worker
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
     * @var string $lastname
     *
     * @ORM\Column(name="lastName", type="string", length=255, nullable=false)
     */
    private $lastname;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string $middlename
     *
     * @ORM\Column(name="middleName", type="string", length=255, nullable=true)
     */
    private $middlename;

    /**
     * @var string $specialty
     *
     * @ORM\Column(name="specialty", type="string", length=255, nullable=true)
     */
    private $specialty;



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
     * Set lastname
     *
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
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
     * Set middlename
     *
     * @param string $middlename
     */
    public function setMiddlename($middlename)
    {
        $this->middlename = $middlename;
    }

    /**
     * Get middlename
     *
     * @return string 
     */
    public function getMiddlename()
    {
        return $this->middlename;
    }
    
    /**
     * Get PIB
     *
     * @return string
     */
    public function getPIB()
    {
    	return $this->lastname." ".$this->name." ".$this->middlename;
    }

    /**
     * Set specialty
     *
     * @param string $specialty
     */
    public function setSpecialty($specialty)
    {
        $this->specialty = $specialty;
    }

    /**
     * Get specialty
     *
     * @return string 
     */
    public function getSpecialty()
    {
        return $this->specialty;
    }
}