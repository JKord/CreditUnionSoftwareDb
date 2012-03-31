<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class CreditUnionFrontendBundleEntityPricelistProxy extends \CreditUnion\FrontendBundle\Entity\Pricelist implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }
    
    
    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setType($type)
    {
        $this->__load();
        return parent::setType($type);
    }

    public function getType()
    {
        $this->__load();
        return parent::getType();
    }

    public function setNterestrate($nterestrate)
    {
        $this->__load();
        return parent::setNterestrate($nterestrate);
    }

    public function getNterestrate()
    {
        $this->__load();
        return parent::getNterestrate();
    }

    public function setForthedate($forthedate)
    {
        $this->__load();
        return parent::setForthedate($forthedate);
    }

    public function getForthedate()
    {
        $this->__load();
        return parent::getForthedate();
    }

    public function setCreditunionid($creditunionid)
    {
        $this->__load();
        return parent::setCreditunionid($creditunionid);
    }

    public function getCreditunionid()
    {
        $this->__load();
        return parent::getCreditunionid();
    }

    public function setCreditunion($creditunion)
    {
        $this->__load();
        return parent::setCreditunion($creditunion);
    }

    public function getCreditunion()
    {
        $this->__load();
        return parent::getCreditunion();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'type', 'nterestrate', 'forthedate', 'creditunionid', 'creditunion');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}