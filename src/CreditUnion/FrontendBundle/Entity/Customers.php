<?php

namespace CreditUnion\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CreditUnion\FrontendBundle\Entity\Customers
 *
 * @ORM\Table(name="customers")
 * @ORM\Entity
 */
class Customers
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
     * @ORM\Column(name="middleName", type="string", length=255, nullable=false)
     */
    private $middlename;

    /**
     * @var string $seriesofpassport
     *
     * @ORM\Column(name="seriesOfPassport", type="string", length=255, nullable=false)
     */
    private $seriesofpassport;

    /**
     * @var integer $numberofpassport
     *
     * @ORM\Column(name="numberOfPassport", type="integer", nullable=false)
     */
    private $numberofpassport;

    /**
     * @var date $dateofbirth
     *
     * @ORM\Column(name="dateOfBirth", type="date", nullable=true)
     */
    private $dateofbirth;

    /**
     * @var string $cityofresidence
     *
     * @ORM\Column(name="cityOfResidence", type="string", length=255, nullable=false)
     */
    private $cityofresidence;

    /**
     * @var string $address
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=false)
     */
    private $address;

    /**
     * @var string $phonenumber
     *
     * @ORM\Column(name="phoneNumber", type="string", length=255, nullable=false)
     */
    private $phonenumber;



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
     * Set seriesofpassport
     *
     * @param string $seriesofpassport
     */
    public function setSeriesofpassport($seriesofpassport)
    {
        $this->seriesofpassport = $seriesofpassport;
    }

    /**
     * Get seriesofpassport
     *
     * @return string 
     */
    public function getSeriesofpassport()
    {
        return $this->seriesofpassport;
    }

    /**
     * Set numberofpassport
     *
     * @param integer $numberofpassport
     */
    public function setNumberofpassport($numberofpassport)
    {
        $this->numberofpassport = $numberofpassport;
    }

    /**
     * Get numberofpassport
     *
     * @return integer 
     */
    public function getNumberofpassport()
    {
        return $this->numberofpassport;
    }

    /**
     * Set dateofbirth
     *
     * @param date $dateofbirth
     */
    public function setDateofbirth($dateofbirth)
    {
        $this->dateofbirth = $dateofbirth;
    }

    /**
     * Get dateofbirth
     *
     * @return date 
     */
    public function getDateofbirth()
    {
        return $this->dateofbirth;
    }

    /**
     * Set cityofresidence
     *
     * @param string $cityofresidence
     */
    public function setCityofresidence($cityofresidence)
    {
        $this->cityofresidence = $cityofresidence;
    }

    /**
     * Get cityofresidence
     *
     * @return string 
     */
    public function getCityofresidence()
    {
        return $this->cityofresidence;
    }

    /**
     * Set address
     *
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set phonenumber
     *
     * @param string $phonenumber
     */
    public function setPhonenumber($phonenumber)
    {
        $this->phonenumber = $phonenumber;
    }

    /**
     * Get phonenumber
     *
     * @return string 
     */
    public function getPhonenumber()
    {
        return $this->phonenumber;
    }
}