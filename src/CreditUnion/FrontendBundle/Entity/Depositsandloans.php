<?php

namespace CreditUnion\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CreditUnion\FrontendBundle\Entity\Depositsandloans
 *
 * @ORM\Table(name="depositsandloans")
 * @ORM\Entity
 */
class Depositsandloans
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
     * @var float $sum
     *
     * @ORM\Column(name="sum", type="float", nullable=false)
     */
    private $sum;

    /**
     * @var date $date
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;
    
    /**
     * @var string $type
     *
     * @ORM\Column(name="priceID", type="integer", nullable=true)
     */
    private $priceid;
    
    /**
     * @var string $type
     *
     * @ORM\Column(name="customerID", type="integer", nullable=true)
     */
    private $customerid;
    
    /**
     * @var string $type
     *
     * @ORM\Column(name="workerID", type="integer", nullable=true)
     */
    private $workerid;

    /**
     * @var Pricelist
     *
     * @ORM\ManyToOne(targetEntity="Pricelist")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="priceID", referencedColumnName="id")
     * })
     */
    private $price;

    /**
     * @var Customers
     *
     * @ORM\ManyToOne(targetEntity="Customers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customerID", referencedColumnName="id")
     * })
     */
    private $customer;

    /**
     * @var Worker
     *
     * @ORM\ManyToOne(targetEntity="Worker")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="workerID", referencedColumnName="id")
     * })
     */
    private $worker;

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
     * Set sum
     *
     * @param float $sum
     */
    public function setSum($sum)
    {
        $this->sum = $sum;
    }

    /**
     * Get sum
     *
     * @return float 
     */
    public function getSum()
    {
        return $this->sum;
    }

    /**
     * Set date
     *
     * @param date $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Get date
     *
     * @return date 
     */
    public function getDate()
    {
        return $this->date;
    }
    
    /**
     * Set priceid
     *
     * @param integer
     */
    public function setPriceid(\CreditUnion\FrontendBundle\Entity\Pricelist $priceid)
    {
    	$this->priceid = $priceid;
    }
    
    /**
     * Get priceid
     *
     * @return integer
     */
    public function getPriceid()
    {
    	return $this->priceid;
    }
    
    /**
     * Set customerid
     *
     * @param integer
     */
    public function setCustomerid(\CreditUnion\FrontendBundle\Entity\Customers $customerid)
    {
    	$this->customerid = $customerid;
    }
    
    /**
     * Get customerid
     *
     * @return integer
     */
    public function getCustomerid()
    {
    	return $this->customerid;
    }
    
    /**
     * Set workerid
     *
     * @param integer
     */
    public function setWorkerid(\CreditUnion\FrontendBundle\Entity\Worker $workerid)
    {
    	$this->workerid = $workerid;
    }
    
    /**
     * Get workerid
     *
     * @return integer
     */
    public function getWorkerid()
    {
    	return $this->workerid;
    }

    /**
     * Set price
     *
     * @param CreditUnion\FrontendBundle\Entity\Pricelist
     */
    public function setPrice(\CreditUnion\FrontendBundle\Entity\Pricelist $price)
    {
        $this->price = $price;
    }

    /**
     * Get price
     *
     * @return CreditUnion\FrontendBundle\Entity\Price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set customer
     *
     * @param CreditUnion\FrontendBundle\Entity\Customers $customer
     */
    public function setCustomer(\CreditUnion\FrontendBundle\Entity\Customers $customer)
    {
        $this->customer = $customer;
    }

    /**
     * Get customer
     *
     * @return CreditUnion\FrontendBundle\Entity\Customers 
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set worker
     *
     * @param CreditUnion\FrontendBundle\Entity\Worker $worker
     */
    public function setWorker(\CreditUnion\FrontendBundle\Entity\Worker $worker)
    {
        $this->worker = $worker;
    }

    /**
     * Get worker
     *
     * @return CreditUnion\FrontendBundle\Entity\Worker 
     */
    public function getWorker()
    {
        return $this->worker;
    }
}