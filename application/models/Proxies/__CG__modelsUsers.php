<?php

namespace Proxies\__CG__\models;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Users extends \models\Users implements \Doctrine\ORM\Proxy\Proxy
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

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setName($name)
    {
        $this->__load();
        return parent::setName($name);
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function setLastName($last_name)
    {
        $this->__load();
        return parent::setLastName($last_name);
    }

    public function getLastName()
    {
        $this->__load();
        return parent::getLastName();
    }

    public function setEmail($email)
    {
        $this->__load();
        return parent::setEmail($email);
    }

    public function getEmail()
    {
        $this->__load();
        return parent::getEmail();
    }

    public function setPassword($password)
    {
        $this->__load();
        return parent::setPassword($password);
    }

    public function getPassword()
    {
        $this->__load();
        return parent::getPassword();
    }

    public function setLastAccess($last_access)
    {
        $this->__load();
        return parent::setLastAccess($last_access);
    }

    public function getLastAccess()
    {
        $this->__load();
        return parent::getLastAccess();
    }

    public function setAdmin($admin)
    {
        $this->__load();
        return parent::setAdmin($admin);
    }

    public function getAdmin()
    {
        $this->__load();
        return parent::getAdmin();
    }

    public function setCity(\models\Cities $city)
    {
        $this->__load();
        return parent::setCity($city);
    }

    public function getCity()
    {
        $this->__load();
        return parent::getCity();
    }

    public function setProfile(\models\Profiles $profile)
    {
        $this->__load();
        return parent::setProfile($profile);
    }

    public function getProfile()
    {
        $this->__load();
        return parent::getProfile();
    }

    public function setUserData(\models\UsersData $user_data)
    {
        $this->__load();
        return parent::setUserData($user_data);
    }

    public function getUserData()
    {
        $this->__load();
        return parent::getUserData();
    }

    public function setLanguage($language)
    {
        $this->__load();
        return parent::setLanguage($language);
    }

    public function getLanguage()
    {
        $this->__load();
        return parent::getLanguage();
    }

    public function setCreationDate($creationDate)
    {
        $this->__load();
        return parent::setCreationDate($creationDate);
    }

    public function getCreationDate()
    {
        $this->__load();
        return parent::getCreationDate();
    }

    public function toArray()
    {
        $this->__load();
        return parent::toArray();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'name', 'last_name', 'email', 'password', 'last_access', 'admin', 'language', 'creationDate', 'city', 'profile', 'user_data');
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
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}